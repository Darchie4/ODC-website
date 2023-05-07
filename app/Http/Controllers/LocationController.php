<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('aboutPages/locationsIndex', ['locations' => Location::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('adminPages/locations/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function doCreate(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'g_maps_embed_link' => 'required',
            'room_name' => 'required',
        ]);

        $uploadedFile = $request->file('roomImg');
        $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
        $uploadedFile->storeAs('/locationsData/image', $fileName, 'public');

        $location = new Location();

        $location->address = \request("address");
        $location->description = \request("room_description");
        $location->room_name = \request("room_name");
        $location->g_maps_embed_link = \request("g_maps_embed_link");
        $location->image_path = $fileName;
        $location->save();

    }

    public function adminIndex()
    {
        return view('/adminPages/locations/index', ["locations" => Location::all()]);
    }

    public function delete($locationID)
    {
        $location = Location::findOrFail($locationID);
        return view('/adminPages/locations/confirmDestroy', ["location" => $location]);
    }

    public function doDelete($locationID)
    {
        $location = Location::findOrFail($locationID);
        Location::destroy($location->id);

        return redirect(route('admin.location.index'));
    }

    public function edit($locationID)
    {
        $location = Location::findOrFail($locationID);
        return view('adminPages/locations/edit', ['location' => $location]);
    }

    public function doEdit($locationID, Request $request)
    {
        $request->validate([
            'address' => 'required',
            'g_maps_embed_link' => 'required',
            'room_name' => 'required',
        ]);

        $location = Location::findOrFail($locationID);

        if ($request->file('roomImg') != null) {
            $uploadedFile = $request->file('roomImg');
            $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
            $uploadedFile->storeAs('/locationsData/image', $fileName, 'public');
            $location->image_path = $fileName;
        }


        $location->address = \request("address");
        $location->description = \request("room_description");
        $location->room_name = \request("room_name");
        $location->g_maps_embed_link = \request("g_maps_embed_link");
        $location->save();
        return redirect(route('admin.location.index'));
    }
}

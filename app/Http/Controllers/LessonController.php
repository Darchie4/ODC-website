<?php

namespace App\Http\Controllers;

use App\Models\DanceStyle;
use App\Models\Lesson;
use App\Models\Location;
use App\Models\Teacher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('NEWscheduale', ['danceStyles' => DanceStyle::all(), 'lessons' => Lesson::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('adminPages/lesson/create', ["teachers" => Teacher::all(), "locations" => Location::all(), "danceStyles" => DanceStyle::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function doCreate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'day' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'km_id' => 'required|integer',
            'teachers' => 'required|array',
            'danceStyle' => 'required',
            'location' => 'required|integer',
        ]);
        $lesson = new Lesson();
        $lesson->name = \request("name");
        $lesson->age = \request("age");
        $lesson->day = \request("day");
        $lesson->lesson_start_time = \request("start_time");
        $lesson->lesson_end_time = \request("end_time");
        $lesson->km_id = \request("km_id");
        $lesson->location_id = \request("location");
        $DBFoundStyle = DB::table('dance_styles')->where('name', \request('danceStyle'));
        if ($DBFoundStyle->doesntExist()) {
            $danceStyle = new DanceStyle();
            $danceStyle->name = \request('danceStyle');
            $danceStyle->save();
        }
        $lesson->dance_style_id = DanceStyle::where('name', \request('danceStyle'))->first()->id;
        $lesson->save();
        $lesson->teachers()->attach(\request('teachers'));
        return redirect(route('teacher.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Lesson $lesson
     * @return Response
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Lesson $lesson
     * @return Response
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Lesson $lesson
     * @return Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Lesson $lesson
     * @return Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}

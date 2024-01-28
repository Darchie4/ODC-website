<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventPicture;
use App\Models\Location;
use App\Models\Teacher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use function Illuminate\Tests\Integration\Routing\fail;

class EventController extends Controller
{
    public function index(): Factory|View|Application
    {
        $now = now();
        $events = Event::where('visible', true)
            ->where('end_time', '>', $now)
            ->get();
        return view('eventPages/index', ["events" => $events]);
    }

    public function show($eventID): Factory|View|Application
    {
        $event = Event::findOrFail($eventID);
        if (!$event->visible){
            return redirect("events.list");
        }
        return view('eventPages/show', ["event" => $event]);
    }

    public function create(): Factory|View|Application
    {
        $locations = Location::all();
        return view('adminPages/events/create', ["locations" => $locations]);
    }
    public function doCreate(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'oneLineDescription' => 'required|string',
            'shortDescription' => 'required|string',
            'locationText' => 'required_if:showLocation,1|nullable|string', // Only required if showLocation is checked
            'location' => [
                'required_if:showLocation,0', // Only required if showLocation is not checked
                Rule::in(Location::pluck('id')->toArray()), // Adjust based on your Location model
            ],
            'teacherImg' => 'nullable|array|max:5', // Assuming a maximum of 5 images
            'teacherImg.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust file type and size as needed
            'visible' => 'boolean',
            'internal_only' => 'boolean',
            'signupNeeded' => 'boolean',
            'signup_link' => 'required_if:signupNeeded,1|nullable|url', // Only required if signupNeeded is checked
            'longDescription' => 'required|string',
        ]);

        // Create an event instance
        $event = new Event();
        $event->name = $validatedData['name'];
        $event->start_time = $validatedData['start_time'];
        $event->end_time = $validatedData['end_time'];
        $event->location_id = $validatedData['location'];
        $event->external_address = $validatedData['locationText'];
        $event->one_line_description = $validatedData['oneLineDescription'];
        $event->short_description = $validatedData['shortDescription'];
        $event->long_description = $validatedData['longDescription'];
        $event->visible = $validatedData['visible'] ?? true;
        $event->internal_only = $validatedData['internal_only'] ?? false;
        $event->signup_needed = $validatedData['signupNeeded'] ?? false;
        $event->signup_link = $validatedData['signup_link'];
        $event->save();

        if ($request->hasFile('teacherImg')) {
            foreach ($request->file('teacherImg') as $file) {
                // Generate a unique file name based on the original name, event ID, and current date and time
                $originalName = $file->getClientOriginalName();
                $fileName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '_' . $event->id . '_' . now()->format('YmdHis') . '.' . $file->getClientOriginalExtension();

                $path = $file->storeAs('/img/event_pictures', $fileName, 'public');

                // Create an event picture instance
                $eventPicture = new EventPicture();
                $eventPicture->image_path = $path;
                $eventPicture->event_id = $event->id;
                $eventPicture->save();
                $event->eventPictures()->save($eventPicture);
            }
        }

        return redirect(route('admin.teacher.index'));
    }
}

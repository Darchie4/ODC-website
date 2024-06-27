<?php

namespace App\Http\Controllers;

use App\Models\DanceStyle;
use App\Models\Lesson;
use App\Models\LessonTimeLocation;
use App\Models\Location;
use App\Models\SkillLevel;
use App\Models\Teacher;
use Carbon\Carbon;
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
//        return view('lesson.TEMPSchedule');
        return view('lesson.schedule', ['danceStyles' => DanceStyle::all(), 'danceStylesToList' => DanceStyle::all()]);
    }

    public function adminIndex()
    {
        return view('adminPages.lesson.index', ['danceStyles' => DanceStyle::all(), 'danceStylesToList' => DanceStyle::all()]);
    }
    /**
     * Display a listing of the resource with search.
     *
     * @return Application|Factory|View
     */
    public function indexSearch($styleID)
    {
        return view('lesson.schedule', ['danceStyles' => DanceStyle::all(), 'danceStylesToList' => DanceStyle::where('id', $styleID)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('adminPages/lesson/create', ["teachers" => Teacher::all(), "locations" => Location::all(), "danceStyles" => DanceStyle::all(), "skillLevels" => SkillLevel::all()]);
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
            'name' => 'required|string',
            'shortLessonDescription' => 'required|string|max:255',
            'danceStyle' => 'required|string',
            'ageFrom' => 'required|integer|lte:ageTo',
            'ageTo' => 'required|integer|gte:ageFrom',
            'start_times.*' => 'required|date_format:H:i',
            'end_times.*' => 'required|date_format:H:i|after:start_times.*',
            'days.*' => 'required|integer|between:0,6',
            'locations.*' => 'required|exists:locations,id',
            'km_id' => 'required|integer|unique:lessons,km_id',
            'seasonStart' => 'required|date_format:Y-m-d|before:seasonEnd',
            'seasonEnd' => 'required|date_format:Y-m-d|after:seasonStart',
            'teachers' => 'required|array',
            'skillLevel' => 'required|string',
            'is_visible' => 'sometimes',
            'can_signup' => 'sometimes',
            'longLessonDescription' => 'required|string',
        ]);
        $lesson = new Lesson();
        $lesson->name = \request("name");
        $lesson->age_from = \request("ageFrom");
        $lesson->age_to = \request("ageTo");
        $lesson->km_id = \request("km_id");
        $lesson->short_description = \request("shortLessonDescription");
        $lesson->long_description = \request("longLessonDescription");
        $lesson->season_start = \request("seasonStart");
        $lesson->season_end = \request("seasonEnd");
        $lesson->is_visible = (\request("is_visible") != null);
        $lesson->is_available = (\request("can_signup") != null);

        $danceStyle = DanceStyle::firstOrCreate(['name' => \request('danceStyle')]);
        $lesson->dance_style_id = $danceStyle->id;

        $skillLevel = SkillLevel::firstOrCreate(['name' => \request('skillLevel')]);
        $lesson->skill_Level_id = $skillLevel->id;

        $lesson->save();

        foreach ($request->input('start_times') as $index => $startTime) {
            $lessonTimeLocation = new LessonTimeLocation();
            $lessonTimeLocation->week_day = $request->input('days')[$index];
            $lessonTimeLocation->start_time = Carbon::parse($startTime)->format('H:i');
            $lessonTimeLocation->end_time = Carbon::parse($request->input('end_times')[$index])->format('H:i');
            $lessonTimeLocation->location_id = $request->input('locations')[$index];
            $lessonTimeLocation->lesson_id = $lesson->id; // Associate the lesson ID
            $lessonTimeLocation->save();
            $lesson->lessonTimeLocations()->save($lessonTimeLocation);
        }

        $lesson->teachers()->attach(\request('teachers'));
        return redirect(route('admin.lesson.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Lesson $lesson
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function show($lessonID)
    {
        return view('lesson.show', ['lesson' => Lesson::where('id', $lessonID)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Lesson $lesson
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function edit($lessonID)
    {
        return view('adminPages.lesson.edit', ['lesson' => Lesson::find($lessonID), "teachers" => Teacher::all(), "locations" => Location::all(), "danceStyles" => DanceStyle::all(), "skillLevels" => SkillLevel::all()]);
    }
    public function doEdit(Request $request, $lessonID)
    {
        $request->validate([
            'name' => 'required|string',
            'shortLessonDescription' => 'required|string|max:255',
            'danceStyle' => 'required|string',
            'ageFrom' => 'required|integer|lte:ageTo',
            'ageTo' => 'required|integer|gte:ageFrom',
            'start_times.*' => 'required|date_format:H:i',
            'end_times.*' => 'required|date_format:H:i|after:start_times.*',
            'days.*' => 'required|integer|between:0,6',
            'locations.*' => 'required|exists:locations,id',
            'km_id' => ['required', 'integer', 'unique:lessons,km_id,'.$lessonID],
            'seasonStart' => 'required|date_format:Y-m-d|before:seasonEnd',
            'seasonEnd' => 'required|date_format:Y-m-d|after:seasonStart',
            'teachers' => 'required|array',
            'skillLevel' => 'required|string',
            'is_visible' => 'sometimes',
            'can_signup' => 'sometimes',
            'longLessonDescription' => 'required|string',
        ]);

        $lesson = Lesson::find($lessonID);
        $lesson->name = \request("name");
        $lesson->age_from = \request("ageFrom");
        $lesson->age_to = \request("ageTo");
        $lesson->km_id = \request("km_id");
        $lesson->short_description = \request("shortLessonDescription");
        $lesson->long_description = \request("longLessonDescription");
        $lesson->season_start = \request("seasonStart");
        $lesson->season_end = \request("seasonEnd");
        $lesson->is_visible = (\request("is_visible") != null);
        $lesson->is_available = (\request("can_signup") != null);

        $danceStyle = DanceStyle::firstOrCreate(['name' => \request('danceStyle')]);
        $lesson->dance_style_id = $danceStyle->id;

        $skillLevel = SkillLevel::firstOrCreate(['name' => \request('skillLevel')]);
        $lesson->skill_Level_id = $skillLevel->id;

        $lesson->save();
        $lesson->teachers()->sync(\request('teachers'));

        foreach ($request->input('start_times') as $index => $startTime) {
            LessonTimeLocation::updateOrCreate(
                ['lesson_id' => $lesson->id, 'week_day' => $request->input('days')[$index]],
                ['start_time' => Carbon::parse($startTime)->format('H:i'), 'end_time' => Carbon::parse($request->input('end_times')[$index])->format('H:i'), 'location_id' => $request->input('locations')[$index]]
            );
        }
        if ($request->input('timeslotsToDeleteInput') != null){
            foreach (json_decode($request->input('timeslotsToDeleteInput')) as $timeslotId) {
                LessonTimeLocation::destroy($timeslotId);
            }
        }

        return redirect(route('admin.lesson.index'));
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
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function destroy($lessonID)
    {
        return view('adminPages.lesson.delete',  ['lesson' => Lesson::where('id', $lessonID)->first()]);
    }
    public function doDestroy($lessonID)
    {
        Lesson::find($lessonID)->teachers()->detach();
        Lesson::destroy($lessonID);
        return redirect(route('admin.lesson.index'));
    }
}

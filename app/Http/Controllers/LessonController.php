<?php

namespace App\Http\Controllers;

use App\Models\DanceStyle;
use App\Models\Lesson;
use App\Models\Location;
use App\Models\SkillLevel;
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
        return view('lesson.NEWscheduale', ['danceStyles' => DanceStyle::all(), 'lessons' => Lesson::all()]);
    }

    /**
     * Display a listing of the resource with search.
     *
     * @return Application|Factory|View
     */
    public function indexSearch($styleID)
    {
        return view('lesson.NEWscheduale', ['danceStyles' => DanceStyle::all(), 'lessons' => Lesson::select()->where("dance_style_id", $styleID)->get()]);
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
            'ageFrom' => 'required|integer|lte:ageTo',
            'ageTo' => 'required|integer|gte:ageFrom',
            'day' => 'required|string',
            'start_time' => 'required|date_format:H:i|before:end_time',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'km_id' => 'required|integer|unique:lessons,km_id',
            'seasonStart' => 'required|date_format:Y-m-d|before:seasonEnd',
            'seasonEnd' => 'required|date_format:Y-m-d|after:seasonStart',
            'teachers' => 'required|array',
            'danceStyle' => 'required|string',
            'location' => 'required|integer|exists:locations,id',
            'skillLevel' => 'required|string',
            'shortLessonDescription' => 'required|string',
            'longLessonDescription' => 'required|string',
        ]);
        $lesson = new Lesson();
        $lesson->name = \request("name");
        $lesson->age_from = \request("ageFrom");
        $lesson->age_to = \request("ageTo");
        $lesson->day = \request("day");
        $lesson->lesson_start_time = \request("start_time");
        $lesson->lesson_end_time = \request("end_time");
        $lesson->km_id = \request("km_id");
        $lesson->location_id = \request("location");
        $lesson->short_description = \request("shortLessonDescription");
        $lesson->long_description = \request("longLessonDescription");
        $lesson->season_start = \request("seasonStart");
        $lesson->season_end = \request("seasonEnd");

        $DBFoundStyle = DB::table('dance_styles')->where('name', \request('danceStyle'));
        if ($DBFoundStyle->doesntExist()) {
            $danceStyle = new DanceStyle();
            $danceStyle->name = \request('danceStyle');
            $danceStyle->save();
        }
        $lesson->dance_style_id = DanceStyle::where('name', \request('danceStyle'))->first()->id;

        $DBFoundSkillLevel = DB::table('skill_levels')->where('name', \request('skillLevel'));
        if ($DBFoundSkillLevel->doesntExist()) {
            $skillLevel = new SkillLevel();
            $skillLevel->name = \request('skillLevel');
            $skillLevel->save();
        }
        $lesson->skill_Level_id = SkillLevel::where('name', \request('skillLevel'))->first()->id;
        $lesson->save();
        $lesson->teachers()->attach(\request('teachers'));
        return redirect(route('lesson.show', ["lessonID" => $lesson->id]));
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

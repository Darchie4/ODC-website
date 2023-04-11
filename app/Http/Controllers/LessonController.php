<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Location;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('adminPages/lesson/create', ["teachers" => Teacher::all(), "locations" => Location::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
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
            'teacher' => 'required|integer',
            'location' => 'required|integer',
        ]);

        $lesson = new Lesson();
        $lesson->name = \request("name");
        $lesson->age = \request("age");
        $lesson->day = \request("day");
        $lesson->lesson_start_time = \request("start_time");
        $lesson->lesson_end_time = \request("end_time");
        $lesson->km_id = \request("km_id");
        $lesson->teacher_id = \request("teacher");
        $lesson->location_id = \request("location");
        $lesson -> save();
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

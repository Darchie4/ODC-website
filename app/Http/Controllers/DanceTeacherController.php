<?php

namespace App\Http\Controllers;

use App\Models\DanceTeacher;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

class DanceTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('/adminPages/teacher/teacherOverView', ["teachers"=>self::getAllTeachers()]);
    }

    public static function getAllTeachers(): Collection
    {
        return DanceTeacher::all();
    }

    public static function getTeacher($paramTeacherID): DanceTeacher
    {
        return DanceTeacher::all() -> where("teacherID", $paramTeacherID) -> first();
    }


}

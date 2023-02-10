<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Faculty;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function index()
    {
        return view('aboutPages/teachers', ["teachers" => Teacher::all()]);
    }

    public function show($teacherID)
    {
        $teacher = Teacher::findOrFail($teacherID);
        return view('aboutPages/teacherView', ["teacher" => $teacher]);
    }

    public function create()
    {
        return view('adminPages/teacher/createTeacher');
    }

    public function doCreate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'teacherImg' => 'required',
            'shortDescription' => 'required',
            'longDescription' => 'required',
        ]);
        $uploadedFile = $request->file('teacherImg');
        $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
        $request->file('teacherImg')->storeAs('/teachersData/image', $fileName, 'public');
        $danceTeacher = new Teacher();
        $danceTeacher->name = \request('name');
        $danceTeacher->imgName = $fileName;
        $danceTeacher->shortDescription = \request('shortDescription');
        $danceTeacher->longDescription = \request('longDescription');
        $danceTeacher->save();
        return redirect('aboutUs/teacherView/' . $danceTeacher->id);
    }

    //Admin stuff under here

    public function adminIndex()
    {
        return view('/adminPages/teacher/teacherOverView', ["teachers" => Teacher::all()]);
    }


}

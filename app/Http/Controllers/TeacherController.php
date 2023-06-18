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
            'name' => 'required|unique:teachers,name',
            'teacherImg' => 'required|unique:teachers,imgName|image',
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

    public function delete($teacherID){
        $teacher = Teacher::findOrFail($teacherID);
        return view('/adminPages/teacher/deleteTeacher', ["teacher" => $teacher]);
    }
    public function doDelete($teacherID){
        $teacher = Teacher::findOrFail($teacherID);
        Teacher::destroy($teacher -> id);

        return redirect(route('admin.teacher.index'));
    }

    public function edit($teacherID){
        $teacher = Teacher::findOrFail($teacherID);
        return view('/adminPages/teacher/editTeacher', ["teacher" => $teacher]);

    }
    public function doEdit($teacherID, Request $request){
        $request->validate([
            'name' => 'required|unique:teachers,name,'.$teacherID,
            'shortDescription' => 'required',
            'longDescription' => 'required',
        ]);
        $danceTeacher = Teacher::findOrFail($teacherID);

        if ($request->file() != null){
            $uploadedFile = $request->file('teacherImg');
            $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
            $request->file('teacherImg')->storeAs('/teachersData/image', $fileName, 'public');
            $danceTeacher->imgName = $fileName;
        }

        $danceTeacher->name = \request('name');
        $danceTeacher->shortDescription = \request('shortDescription');
        $danceTeacher->longDescription = \request('longDescription');
        $danceTeacher->save();
        return redirect('aboutUs/teacherView/' . $danceTeacher->id);
    }
}

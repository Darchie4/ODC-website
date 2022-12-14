<?php

use App\Models\DanceTeachers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homePage');
});
Route::get('/schedule', function () {
    return view('schedule');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aboutUs', function () {
    return view('aboutUs');
});
Route::get('/aboutUs/teachers', function () {
    $teachers = App\Models\DanceTeachers::getAllTeachers();
    return view('aboutPages/teachers', ["teachers"=>$teachers]);
});
Route::get('/aboutUs/teacherView/{teacherID}', function ($teacherID) {
    $teacher = App\Models\DanceTeachers::getTeacher($teacherID);
    return view('aboutPages/teacherView', ["teacher"=>$teacher]);
});
Route::get('/aboutUs/board', function () {
    return view('aboutPages/board');
});

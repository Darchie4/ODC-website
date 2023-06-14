<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TeacherController;
use App\Models\DanceStyle;
use App\Models\Location;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

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

Route::get('/sitemap', function (){
    SitemapGenerator::create('http://odcweb.madswp.dk/')
        ->writeToFile(public_path('sitemap.xml'));
    return 'Sitemap has been generated';
});

Route::get('/', function () {
    return view('homePage');
});
Route::get('/brudevals', function () {
    return view('bridalwaltz');
});
Route::get('/schedule', function () {
    return view('schedule');
});
Route::get('/NEWSchedule', [LessonController::class, "index"])->name('schedule');
Route::get('/schedule/{styleID}', [LessonController::class, "indexSearch"])->name('schedule.search');

Route::get('/lesson/{lessonID}', [LessonController::class, "show"])->name('lesson.show');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/udmelding', function () {
    return view('udmelding');
});

Route::prefix('aboutUs')->group(function (){
    Route::get('/', function () {
        return view('aboutUs');
    });
    Route::get('/board', function () {
        return view('aboutPages/board');
    });
    Route::get('/teachers', [TeacherController::class, "index"])->name('teacher.index');
    Route::get('/teacherView/{teacherID}', [TeacherController::class, "show"])->name('teacherView');

    Route::get('/locations', [LocationController::class, 'index']) -> name('location.index');

});
Route::prefix('admin')->group(function (){
    Route::get('/registrer', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/registrer', [AdminController::class, 'doCreate'])->name('admin.doCreate');
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'doLogin'])->name('admin.doLogin');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth')->group(function (){
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::middleware('can:admin')->group(function (){
            Route::get('/teacherIndex', [TeacherController::class, 'adminIndex'])->name("admin.teacher.index");
            Route::get('/createTeacher', [TeacherController::class, 'create'])->name('admin.teacher.create');
            Route::post('/createTeacher', [TeacherController::class, 'doCreate'])->name('admin.teacher.doCreate');
            Route::get('/teacherEdit/{teacherID}', [TeacherController::class, 'edit'])->name("admin.teacher.edit");
            Route::post('/teacherEdit/{teacherID}', [TeacherController::class, 'doEdit'])->name("admin.teacher.doEdit");
            Route::get('/teacherDelete/{teacherID}', [TeacherController::class, 'delete'])->name("admin.teacher.delete");
            Route::delete('/teacherDoDelete/{teacherID}', [TeacherController::class, 'doDelete'])->name("admin.teacher.doDelete");


            Route::get('/locationIndex', [LocationController::class, 'adminIndex'])->name("admin.location.index");
            Route::get('/createLocation', [LocationController::class, 'create']) -> name('admin.location.create');
            Route::post('/createLocation', [LocationController::class, 'doCreate']) -> name('admin.location.doCreate');
            Route::get('/editLocation/{locationID}', [LocationController::class, 'edit'])->name("admin.location.edit");
            Route::post('/doEditLocation/{locationID}', [LocationController::class, 'doEdit'])->name("admin.location.doEdit");
            Route::get('/deleteLocation/{locationID}', [LocationController::class, 'delete'])->name("admin.location.delete");
            Route::delete('/doDeleteLocation/{locationID}', [LocationController::class, 'doDelete'])->name("admin.location.doDelete");


            Route::get('/lessonIndex', [LessonController::class, 'create']) -> name('admin.lesson.index');
            Route::get('/createLesson', [LessonController::class, 'create']) -> name('admin.lesson.create');
            Route::post('/createLesson', [LessonController::class, 'doCreate']) -> name('admin.lesson.doCreate');
        });

    });
});


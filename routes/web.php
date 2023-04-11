<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

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
Route::get('/contact', function () {
    return view('contact');
});

Route::prefix('aboutUs')->group(function (){
    Route::get('/', function () {
        return view('aboutUs');
    });
    Route::get('/board', function () {
        return view('aboutPages/board');
    });
    Route::get('/teachers', [TeacherController::class, "index"]);
    Route::get('/teacherView/{teacherID}', [TeacherController::class, "show"]);

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
            Route::get('/teacherIndex', [TeacherController::class, 'adminIndex'])->name("teacher.index");
            Route::get('/createTeacher', [TeacherController::class, 'create'])->name('teacher.create');
            Route::post('/createTeacher', [TeacherController::class, 'doCreate'])->name('teacher.doCreate');

            Route::get('/createLocation', [LocationController::class, 'create']) -> name('location.create');
            Route::post('/createLocation', [LocationController::class, 'doCreate']) -> name('location.doCreate');

            Route::get('/createLesson', [LessonController::class, 'create']) -> name('lesson.create');
            Route::post('/createLesson', [LessonController::class, 'doCreate']) -> name('lesson.doCreate');
        });

    });
});


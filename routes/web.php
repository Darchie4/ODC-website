<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BoardMemberController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ServeErrorController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;
use Stevebauman\Location\Facades\Location;

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

Route::get('/sitemap', function () {
    SitemapGenerator::create('https://odensedansecenter.dk/')
        ->writeToFile(public_path('sitemap.xml'));
    return 'Sitemap has been generated';
});
Route::middleware(['routestatistics'])->group(function () {
    Route::get('/', function () {
        return view('homePage');
    })->name("home");
    Route::get('/brudevals', function () {
        return view('bridalwaltz');
    })->name('bridalwaltz');
    Route::get('/schedule', [LessonController::class, "index"])->name('schedule');
    Route::get('/hold', [LessonController::class, "index"]);
    Route::get('/schedule/{styleID}', [LessonController::class, "indexSearch"])->name('schedule.search');

    Route::get('/lesson/{lessonID}', [LessonController::class, "show"])->name('lesson.show');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    Route::get('/udmelding', function () {
        return view('udmelding');
    });

    Route::get('/wordpress/{any}', [ServeErrorController::class, "wp_gone"])->where('any', '.*');

    Route::prefix('aboutUs')->group(function () {
        Route::get('/', [AboutUsController::class, "index"])->name('about.index');
        Route::get('/board', [BoardMemberController::class, "index"])->name('about.board.index');

        Route::get('/teachers', [TeacherController::class, "index"])->name('teacher.index');
        Route::get('/teacherView/{teacherID}', [TeacherController::class, "show"])->name('teacherView');

        Route::get('/locations', [LocationController::class, 'index'])->name('location.index');

        Route::get('/calendar', [AboutUsController::class, "calendar"])->name('about.calendar');

        Route::get('/articlesOfAssociation', function () {
            return view('aboutPages/articlesOfAssociation');
        })->name('about.articlesOfAssociation');

    });
});
Route::prefix('admin')->group(function () {
    Route::get('/testIp', function () {
        dd(Location::get("80.208.68.50"));
    });
    Route::get('/registrer', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/registrer', [AdminController::class, 'doCreate'])->name('admin.doCreate');
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'doLogin'])->name('admin.doLogin');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::middleware('can:admin')->group(function () {
            Route::get('/teacherIndex', [TeacherController::class, 'adminIndex'])->name("admin.teacher.index");
            Route::get('/createTeacher', [TeacherController::class, 'create'])->name('admin.teacher.create');
            Route::post('/createTeacher', [TeacherController::class, 'doCreate'])->name('admin.teacher.doCreate');
            Route::get('/teacherEdit/{teacherID}', [TeacherController::class, 'edit'])->name("admin.teacher.edit");
            Route::post('/teacherEdit/{teacherID}', [TeacherController::class, 'doEdit'])->name("admin.teacher.doEdit");
            Route::get('/teacherDelete/{teacherID}', [TeacherController::class, 'delete'])->name("admin.teacher.delete");
            Route::get('/teacherDoDelete/{teacherID}', [TeacherController::class, 'doDelete'])->name("admin.teacher.doDelete");


            Route::get('/locationIndex', [LocationController::class, 'adminIndex'])->name("admin.location.index");
            Route::get('/createLocation', [LocationController::class, 'create'])->name('admin.location.create');
            Route::post('/createLocation', [LocationController::class, 'doCreate'])->name('admin.location.doCreate');
            Route::get('/editLocation/{locationID}', [LocationController::class, 'edit'])->name("admin.location.edit");
            Route::post('/doEditLocation/{locationID}', [LocationController::class, 'doEdit'])->name("admin.location.doEdit");
            Route::get('/deleteLocation/{locationID}', [LocationController::class, 'delete'])->name("admin.location.delete");
            Route::get('/doDeleteLocation/{locationID}', [LocationController::class, 'doDelete'])->name("admin.location.doDelete");


            Route::get('/lessonIndex', [LessonController::class, 'adminIndex'])->name('admin.lesson.index');
            Route::get('/createLesson', [LessonController::class, 'create'])->name('admin.lesson.create');
            Route::post('/createLesson', [LessonController::class, 'doCreate'])->name('admin.lesson.doCreate');
            Route::get('/editLesson/{lessonID}', [LessonController::class, 'edit'])->name('admin.lesson.edit');
            Route::post('/doEditLesson/{lessonID}', [LessonController::class, 'doEdit'])->name('admin.lesson.doEdit');
            Route::get('/deleteLesson/{lessonID}', [LessonController::class, 'destroy'])->name('admin.lesson.destroy');
            Route::get('/doDeleteLesson/{lessonID}', [LessonController::class, 'doDestroy'])->name('admin.lesson.doDestroy');
        });
    });
});


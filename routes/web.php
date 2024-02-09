<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\home\PointTableController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MostRunsController;
use App\Http\Controllers\MostWicketController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


// home section start
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/home/point-table',[PointTableController::class,'pointTable'])->name('point_table');
// Route::get('/news',[HomeController::class,'news'])->name('news');
Route::get('/home/schedule',[ScheduleController::class,'homeSchedule'])->name('schedule');

// home section end

// admin section start
Route::middleware('auth','admin:admin')->group(function () {
    Route::get('/admin',[AdminController::class,'admin'])->name('admin');
});

Route::get('/admin',[AdminController::class,'dashboard'])->name('admin');

Route::get('/admin/schedule',[ScheduleController::class,'schedule'])->name('admin.schedule');
Route::get('/admin/schedule/create',[ScheduleController::class,'create'])->name('schedule.create');
Route::post('/admin/schedule/create',[ScheduleController::class,'store'])->name('schedule.store');

Route::get('/edit/{id}',[ScheduleController::class,'edit'])->name('edit');
Route::get('/delete/{id}',[ScheduleController::class,'destroy']);
Route::put('schedule/{id}/update',[ScheduleController::class,'update']);

// point table start
Route::get('/admin/point/table',[PointController::class,'pointTable'])->name('point.table');
Route::get('/admin/point/table/create',[PointController::class,'create'])->name('point.table.create');
Route::post('/admin/point/table/store',[PointController::class,'store'])->name('point.table.store');
Route::get('/edit/{id}',[PointController::class,'edit'])->name('edit');
Route::put('point/table/{id}/update',[PointController::class,'update']);
Route::get('/delete/{id}',[PointController::class,'destroy']);
// point table end

Route::get('/admin/most/runs',[MostRunsController::class,'mostRuns'])->name('most.runs');
Route::get('/admin/most/wicket',[MostWicketController::class,'mostWicket'])->name('most.wicket');
Route::get('/admin/news',[NewsController::class,'news'])->name('admin.news');

// image
Route::get('/admin/image',[ImageController::class,'image'])->name('admin.image');
Route::get('/admin/image/create',[ImageController::class,'create'])->name('image.create');
Route::post('image/store',[ImageController::class,'store']);
Route::get('imgedit/{id}',[ImageController::class,'imgedit']);
Route::post('image/{id}/update',[ImageController::class,'update']);
Route::get('destroy/{id}',[ImageController::class,'destroy']);
// admin section end


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

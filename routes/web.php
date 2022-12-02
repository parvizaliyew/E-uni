<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsEventController;

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
    return view('welcome');
});


Route::prefix('admin')->group(function () 
{
    Route::get('/',[DashboardController::class,'index'])->name('admin.index');
    Route::resource('/news-event', NewsEventController::class);
    Route::get('/news-event/delete/{id}',[NewsEventController::class,'delete'])->name('news-event.delete');
    Route::resource('/slider', SliderController::class);
    Route::get('/slider/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');

});

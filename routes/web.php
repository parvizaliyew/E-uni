<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LiderController;
use App\Http\Controllers\Admin\AlumniController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsEventController;
use App\Http\Controllers\Admin\InstaGaleryController;
use App\Http\Controllers\Admin\ProgramDegreController;
use App\Http\Controllers\Admin\StudentMonthController;

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

    Route::resource('/leadership', LiderController::class);
    Route::get('/leadership/delete/{id}',[LiderController::class,'delete'])->name('leadership.delete');

    Route::resource('/programs-degree', ProgramDegreController::class);
    Route::get('/programs-degree/delete/{id}', [ProgramDegreController::class,'delete'])->name('programs-degree.delete');

    Route::resource('/donations', DonationController::class);
    Route::get('/donation/delete/{id}', [DonationController::class,'delete'])->name('donations.delete');

    Route::resource('/partner', PartnerController::class);
    Route::get('/partner/delete/{id}', [PartnerController::class,'delete'])->name('partner.delete');

    Route::resource('/alumni', AlumniController::class);
    Route::get('/alumni/delete/{id}', [AlumniController::class,'delete'])->name('alumni.delete');

    Route::resource('/student-month', StudentMonthController::class);
    Route::get('/student-month/delete/{id}', [StudentMonthController::class,'delete'])->name('student-month.delete');

    Route::get('/setting-index', [SettingController::class,'index'])->name('setting.index');
    Route::post('/setting-update/{id}', [SettingController::class,'update'])->name('setting.update');

    Route::get('/counter-index', [CounterController::class,'index'])->name('counter.index');
    Route::post('/counter-update/{id}', [CounterController::class,'update'])->name('counter.update');
    
    Route::resource('/instagalery', InstaGaleryController::class);
    Route::get('/instagalery/delete/{id}', [InstaGaleryController::class,'delete'])->name('instagalery.delete');
});

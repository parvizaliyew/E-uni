<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LiderController;
use App\Http\Controllers\Front\FrontController;
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



$locale = Request::segment(1);

if(in_array($locale, ['az','en','de'])){
    App::setLocale($locale);
}else{
    App::setLocale('az');

    $locale = '';
}


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

//********* FRONT *********//
Route::get('/',[FrontController::class,'index'])->name('home.az');
Route::get('/en',[FrontController::class,'index'])->name('home.en');
Route::get('/de',[FrontController::class,'index'])->name('home.de');

Route::get('/iane',[FrontController::class,'donation'])->name('donation.az');
Route::get('/en/donation',[FrontController::class,'donation'])->name('donation.en');
Route::get('/de/spende',[FrontController::class,'donation'])->name('donation.de');
Route::post('/donation/post',[FrontController::class,'donation_post'])->name('donation_post');

Route::get('/xeberler-tedbirler',[FrontController::class,'news_event'])->name('news-evnt.az');
Route::get('/en/news-events',[FrontController::class,'news_event'])->name('news-evnt.en');
Route::get('/de/nachrichten-veranstaltungen',[FrontController::class,'news_event'])->name('news-evnt.de');

Route::get('/xeber/{slug}',[FrontController::class,'news_single'])->name('news_single.az');
Route::get('/en/news/{slug}',[FrontController::class,'news_single'])->name('news_single.en');
Route::get('/de/nachrichten/{slug}',[FrontController::class,'news_single'])->name('news_single.de');

Route::get('/tedbir/{slug}',[FrontController::class,'news_single'])->name('event_single.az');
Route::get('/en/event/{slug}',[FrontController::class,'news_single'])->name('event_single.en');
Route::get('/de/messen/{slug}',[FrontController::class,'news_single'])->name('event_single.de');

Route::get('/liderlik-heyet',[FrontController::class,'lid_heyet'])->name('lid_heyet.az');
Route::get('/en/leadership-staff',[FrontController::class,'lid_heyet'])->name('lid_heyet.en');
Route::get('/de/führung-mitarbeiter',[FrontController::class,'lid_heyet'])->name('lid_heyet.de');

Route::get('/məzunlar',[FrontController::class,'alumni'])->name('alumni.az');
Route::get('/en/alumni',[FrontController::class,'alumni'])->name('alumni.en');
Route::get('/de/absolventen',[FrontController::class,'alumni'])->name('alumni.de');

Route::get('/akkreditasiya',[FrontController::class,'akra'])->name('akra.az');
Route::get('/en/accreditation',[FrontController::class,'akra'])->name('akra.en');
Route::get('/de/akkreditierung',[FrontController::class,'akra'])->name('akra.de');

Route::get('/tarix',[FrontController::class,'history'])->name('history.az');
Route::get('/en/history',[FrontController::class,'history'])->name('history.en');
Route::get('/de/geschichte',[FrontController::class,'history'])->name('history.de');

Route::get('/bakalavr-derecesi',[FrontController::class,'bachelor'])->name('bachelor.az');
Route::get('/en/bachelor-degree',[FrontController::class,'bachelor'])->name('bachelor.en');
Route::get('/de/bachelor-abschluss',[FrontController::class,'bachelor'])->name('bachelor.de');

Route::get('file/download/{id}',[FrontController::class,'download'])->name('download_file');
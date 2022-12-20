<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactMessage;
use App\Http\Controllers\Admin\DonationMessage;
use App\Http\Controllers\Admin\LiderController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\AlumniController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\LibraryController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\PoliciesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsEventController;
use App\Http\Controllers\Admin\DegreeFileController;
use App\Http\Controllers\Admin\InstaGaleryController;
use App\Http\Controllers\Admin\ProgramDegreController;
use App\Http\Controllers\Admin\StudentMonthController;
use App\Http\Controllers\Admin\DonationMessageController;


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

    Route::resource('/galery', GaleryController::class);
    Route::get('/galery/delete/{id}', [GaleryController::class,'delete'])->name('galery.delete');

    Route::resource('/policies', PoliciesController::class);
    Route::get('/policies/delete/{id}', [PoliciesController::class,'delete'])->name('policies.delete');
    Route::get('/policies/dowload/{id}', [PoliciesController::class,'download'])->name('policies.download');


    Route::get('contact-messages', [ContactMessage::class,'index'])->name('contact.index');
    Route::get('contact-message/{id}', [ContactMessage::class,'show'])->name('contact.show');
    Route::get('contact-message/delete/{id}', [ContactMessage::class,'delete'])->name('contact.delete');

    Route::get('donation-messages', [DonationMessageController::class,'index'])->name('donationmessage.index');
    Route::get('donation-message/{id}', [DonationMessageController::class,'show'])->name('donationmessage.show');
    Route::get('donation-message/delete/{id}', [DonationMessageController::class,'delete'])->name('donationmessage.delete');

    Route::resource('/degre-files', DegreeFileController::class);
    Route::get('/degre-files/delete/{id}', [DegreeFileController::class,'delete'])->name('degre-files.delete');
    Route::get('/degre-files/dowload/{id}', [DegreeFileController::class,'download'])->name('degre-files.download');

    Route::resource('/library', LibraryController::class);
    Route::get('/library/delete/{id}', [LibraryController::class,'delete'])->name('library.delete');
    Route::post('/library/aktiv', [LibraryController::class,'aktiv']);

});

//********* FRONT *********//
Route::get('/',[FrontController::class,'index'])->name('home.az');
Route::get('/en',[FrontController::class,'index'])->name('home.en');
Route::get('/de',[FrontController::class,'index'])->name('home.de');

Route::get('/about',[FrontController::class,'about'])->name('about.az');
Route::get('/en/about',[FrontController::class,'about'])->name('about.en');
Route::get('/de/about',[FrontController::class,'about'])->name('about.de');

Route::get('/siyasətlər',[FrontController::class,'policies'])->name('policies.az');
Route::get('/en/policies',[FrontController::class,'policies'])->name('policies.en');
Route::get('/de/richtlinien',[FrontController::class,'policies'])->name('policies.de');

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

Route::get('/master-derecesi',[FrontController::class,'master'])->name('master.az');
Route::get('/en/master-degree',[FrontController::class,'master'])->name('master.en');
Route::get('/de/master-abschluss',[FrontController::class,'master'])->name('master.de');

Route::get('/phd-derecesi',[FrontController::class,'phd'])->name('phd.az');
Route::get('/en/phd-degree',[FrontController::class,'phd'])->name('phd.en');
Route::get('/de/phd-abschluss',[FrontController::class,'phd'])->name('phd.de');

Route::get('/bakalavr-derecesi/{slug}',[FrontController::class,'akademic_single'])->name('bachelor_single.az');
Route::get('/en/bachelor-degree/{slug}',[FrontController::class,'akademic_single'])->name('bachelor_single.en');
Route::get('/de/bachelor-abschluss/{slug}',[FrontController::class,'akademic_single'])->name('bachelor_single.de');

Route::get('/master-derecesi/{slug}',[FrontController::class,'akademic_single'])->name('master_single.az');
Route::get('/en/master-degree/{slug}',[FrontController::class,'akademic_single'])->name('master_single.en');
Route::get('/de/master-abschluss/{slug}',[FrontController::class,'akademic_single'])->name('master_single.de');

Route::get('/phd-derecesi/{slug}',[FrontController::class,'akademic_single'])->name('phd_single.az');
Route::get('/en/phd-degree/{slug}',[FrontController::class,'akademic_single'])->name('phd_single.en');
Route::get('/de/phd-abschluss/{slug}',[FrontController::class,'akademic_single'])->name('phd_single.de');

Route::get('/elaqe',[FrontController::class,'contact'])->name('contact.az');
Route::get('/en/contact',[FrontController::class,'contact'])->name('contact.en');
Route::get('/de/kontakt',[FrontController::class,'contact'])->name('contact.de');
Route::post('/contact/post',[FrontController::class,'contact_post'])->name('contact_post');

Route::get('/bakalavr',[FrontController::class,'undergraduate'])->name('u_graduate.az');
Route::get('/en/undergraduate',[FrontController::class,'undergraduate'])->name('u_graduate.en');
Route::get('/de/student',[FrontController::class,'undergraduate'])->name('u_graduate.de');

Route::get('/məzun',[FrontController::class,'graduate'])->name('graduate.az');
Route::get('/en/graduate',[FrontController::class,'graduate'])->name('graduate.en');
Route::get('/de/absolvent',[FrontController::class,'graduate'])->name('graduate.de');

Route::get('/aspirantura',[FrontController::class,'postgraduate'])->name('postgraduate.az');
Route::get('/en/postgraduate',[FrontController::class,'postgraduate'])->name('postgraduate.en');
Route::get('/de/postgraduierter',[FrontController::class,'postgraduate'])->name('postgraduate.de');

Route::get('/beynelxalq-telebeler',[FrontController::class,'international'])->name('international.az');
Route::get('/en/international-students',[FrontController::class,'international'])->name('international.en');
Route::get('/de/internationale-schüler',[FrontController::class,'international'])->name('international.de');

Route::get('/kitabxana',[FrontController::class,'library'])->name('library.az');
Route::get('/en/library',[FrontController::class,'library'])->name('library.en');
Route::get('/de/bibliothek',[FrontController::class,'library'])->name('library.de');

Route::get('file/download/{id}',[FrontController::class,'download'])->name('download_file');
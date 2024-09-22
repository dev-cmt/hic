<?php

use App\Http\Controllers\AppointController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/app-download', function () {
    $filePath = public_path('app.apk');
    return response()->download($filePath, 'app.apk');
})->name('app.download');


Route::get('/', [HomeController::class, 'welcome'])->name('home');
Route::get('/page-about', [HomeController::class, 'about'])->name('page.about');
Route::get('/page-message', [HomeController::class, 'message'])->name('page.message');
Route::get('/page-gallery-photo', [HomeController::class, 'galleryPhoto'])->name('page.gallery-photo');
Route::get('/page-gallery-video', [HomeController::class, 'galleryVideo'])->name('page.gallery-video');
Route::get('/page-activities', [HomeController::class, 'activities'])->name('page.activities');
Route::get('/page-news', [HomeController::class, 'news'])->name('page.news');
Route::get('/page-contact', [HomeController::class, 'contact'])->name('page.contact');


Route::get('/counseling', [HomeController::class, 'counselingService'])->name('page.counseling');
Route::get('/ielts-toefl', [HomeController::class, 'ieltsToefl'])->name('page.ielts_toefl');
Route::get('/admission-services', [HomeController::class, 'admissionServices'])->name('page.admission_services');
Route::get('/visa-processing', [HomeController::class, 'visaProcessing'])->name('page.visa_processing');
Route::get('/accommodation-support', [HomeController::class, 'accommodationSupport'])->name('page.accommodation_support');
Route::get('/pre-departure-briefing', [HomeController::class, 'preDepartureBriefing'])->name('page.pre_departure_briefing');
Route::get('/airport-pickup', [HomeController::class, 'airportPickup'])->name('page.airport_pickup');


Route::get('/page-study-abroad/uk', [HomeController::class, 'studyUK'])->name('page.uk');
Route::get('/page-study-abroad/malaysia', [HomeController::class, 'studyMalaysia'])->name('page.malaysia');
Route::get('/page-study-abroad/canada', [HomeController::class, 'studyCanada'])->name('page.canada');
Route::get('/page-study-abroad/australia', [HomeController::class, 'studyAustralia'])->name('page.australia');
Route::get('/page-study-abroad/germany', [HomeController::class, 'studyGermany'])->name('page.germany');
Route::get('/page-study-abroad/dubai', [HomeController::class, 'studyDubai'])->name('page.dubai');
Route::get('/page-study-abroad/malta', [HomeController::class, 'studyMalta'])->name('page.malta');
Route::get('/page-study-abroad/new-zealand', [HomeController::class, 'studyNewZealand'])->name('page.new_zealand');
Route::get('/page-study-abroad/usa', [HomeController::class, 'studyUSA'])->name('page.usa');



Route::get('/page-why-choose', [HomeController::class, 'whyChoose'])->name('why.choose');
Route::get('/page-event-reg', [HomeController::class, 'eventReg'])->name('event.reg');

Route::get('/page-congratulation', [HomeController::class, 'congratulation'])->name('page.congratulation');

Route::middleware('auth')->group(function () {
    Route::get('/profile-index', [ProfileController::class, 'profileIndex'])->name('profile.index');
    Route::get('/profile-settings', [ProfileController::class, 'profileSettings'])->name('profile.settings');
    Route::post('/profile-update/image', [ProfileController::class, 'updateImage'])->name('profile.updateImage');
    Route::post('/profile-update', [ProfileController::class, 'profileUpdate'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
});

/**-------------------------------------------------------------------------
 * KEY : ADMIN PART
 * -------------------------------------------------------------------------
 */

Route::post('/event-register/store', [EventController::class, 'eventRegisterStore'])->name('event-register.store');

Route::middleware('auth')->group(function () {
    Route::resource('events', EventController::class);
    Route::get('/event-register/index', [EventController::class, 'eventRegisterIndex'])->name('event-register.index');
    Route::get('/event-register/{id}/show', [EventController::class, 'eventRegisterShow'])->name('event-register.show');

});


require __DIR__.'/auth.php';

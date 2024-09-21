<?php

use App\Http\Controllers\AppointController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

use App\Http\Controllers\HomeController;
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

Route::get('/page-services', [HomeController::class, 'services'])->name('page.services');
Route::get('/page-study-abroad', [HomeController::class, 'studyAbroad'])->name('page.study-abroad');


Route::get('/why-choose', [HomeController::class, 'whyChoose'])->name('why.choose');
Route::get('/event-reg', [HomeController::class, 'eventReg'])->name('event.reg');


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
 * KEY : PATIENT REGISTATION PART
 * -------------------------------------------------------------------------
 */
Route::middleware('auth')->group(function () {
    Route::delete('/pages-about', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

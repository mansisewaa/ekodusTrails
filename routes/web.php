<?php

use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TreksController;
use Illuminate\Support\Facades\Route;

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



Route::get('/test', function () {
    return view('welcome');
});



Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'getAboutPage'])->name('about-us');
Route::get('/our-treks', [FrontendController::class, 'getTreksPage'])->name('our-treks');
Route::get('/trek-details/{id}', [FrontendController::class, 'getTreksDetailsPage'])->name('our-treks-details');
Route::get('/contact', [FrontendController::class, 'getContactPage'])->name('contact-us');
//gallery
Route::get('/gallery', [FrontendController::class, 'getGalleryPage'])->name('gallery');

Route::get('/packages', [FrontendController::class, 'getPackages'])->name('our-packages');
Route::get('/team', [FrontendController::class, 'getTeam'])->name('team-members');
Route::get('/blog', [FrontendController::class, 'getBlog'])->name('blog');
Route::get('/blog-details', [FrontendController::class, 'getBlogDetails'])->name('blog-details');
Route::get('/faq', [FrontendController::class, 'getFAQ'])->name('faq');
Route::get('/terms', [FrontendController::class, 'getTerms'])->name('terms');
Route::get('/privacy', [FrontendController::class, 'getPrivacy'])->name('privacy');

Route::middleware(['auth:customer'])->group(function () {
    Route::get('/booking', [FrontendController::class, 'booking'])->name('booking');
    Route::post('/submit-booking', [BookingController::class, 'submitBooking'])->name('submit-booking');
});

Route::post('/customer/register', [CustomerAuthController::class, 'register'])->name('customer.register');
Route::get('/customer/login-form', [CustomerAuthController::class, 'loginForm'])->name('customer.login.view');
Route::post('/customer/login', [CustomerAuthController::class, 'login'])->name('customer.login');

Route::get('/customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//menu
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu.index');
Route::get('/menu/create', [App\Http\Controllers\MenuController::class, 'create'])->name('menu.create');
Route::post('/menu/store', [App\Http\Controllers\MenuController::class, 'store'])->name('menu.store');
Route::get('/menu/edit/{id}', [App\Http\Controllers\MenuController::class, 'edit'])->name('menu.edit');
Route::post('/menu/update/{id}', [App\Http\Controllers\MenuController::class, 'update'])->name('menu.update');
Route::get('/menu/delete/{id}', [App\Http\Controllers\MenuController::class, 'destroy'])->name('menu.delete');

//trek
Route::get('/trek', [TreksController::class, 'index'])->name('trek.index');
Route::get('/trek/create', [TreksController::class, 'create'])->name('trek.create');
Route::post('/trek/store', [TreksController::class, 'store'])->name('trek.store');
Route::get('/trek/details/{id}', [TreksController::class, 'details'])->name('trek.details');
Route::get('/trek/edit/{id}', [TreksController::class, 'edit'])->name('trek.edit');
Route::post('/trek/update/{id}', [TreksController::class, 'update'])->name('trek.update');
Route::get('/trek/delete/{id}', [TreksController::class, 'destroy'])->name('trek.delete');
Route::post('/trek/details/store/{id}',[TreksController::class, 'detailsStore'])->name('trek.details.store');

Route::get('/book', [AdminBookingController::class, 'index'])->name('booking.index');


Route::get('/email', function () {
    return view('email');
});

Route::post('/editor/image_upload', [TreksController::class, 'upload'])->name('upload');

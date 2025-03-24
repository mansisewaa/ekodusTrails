<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/about', [HomeController::class, 'getAboutPage'])->name('about-us');
Route::get('/our-treks', [HomeController::class, 'getTreksPage'])->name('our-treks');
Route::get('/trek-details', [HomeController::class, 'getTreksDetailsPage'])->name('our-treks-details');
Route::get('/contact', [HomeController::class, 'getContactPage'])->name('contact-us');
//gallery
Route::get('/gallery', [HomeController::class, 'getGalleryPage'])->name('gallery');


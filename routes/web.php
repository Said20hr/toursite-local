<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ServiceController;
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
    return redirect(app()->getLocale());
});
Route::prefix('{locale?}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('setlocale')
    ->group(function () {
        Route::get('/', [HomePageController::class, 'index'])->name('home-page');
        Route::get('/services', [ServiceController::class, 'index'])->name('services');
        Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service.show');
        Route::get('/about-us', [AboutController::class, 'index'])->name('about');
        Route::get('/booking', [ServiceController::class, 'booking'])->name('booking');
        Route::get('/booking/{slug}', [ServiceController::class, 'bookingService'])->name('booking.service');
        Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
        Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.submit');
    });

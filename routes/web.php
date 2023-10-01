<?php

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
Route::get('/',[\App\Http\Controllers\HomePageController::class,'index'])->name('home-page');
Route::get('/services',[\App\Http\Controllers\ServiceController::class,'index'])->name('services');
Route::get('/service/{slug}',[\App\Http\Controllers\ServiceController::class,'show'])->name('service.show');
Route::get('/about-us',[\App\Http\Controllers\AboutController::class,'index'])->name('about');
Route::get('/booking',[\App\Http\Controllers\ServiceController::class,'booking'])->name('booking');
Route::get('/booking/{slug}',[\App\Http\Controllers\ServiceController::class,'bookingService'])->name('booking.service');
Route::get('/contact-us',[\App\Http\Controllers\ContactController::class,'index'])->name('contact');
Route::post('/contact-us',[\App\Http\Controllers\ContactController::class,'store'])->name('contact.submit');
    });
/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

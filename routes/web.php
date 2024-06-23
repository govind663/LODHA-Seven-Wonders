<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PreventBackHistoryMiddleware;

// ==== Home Controller
use App\Http\Controllers\Frontend\HomeController;
// ==== About Controller
use App\Http\Controllers\Frontend\AboutController;
// ==== Contact Us Controller
use App\Http\Controllers\Frontend\ContactUsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::group(['middleware'=>[PreventBackHistoryMiddleware::class]],function(){
    // ==== Home
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // ==== About
    Route::get('/about', [AboutController::class, 'about'])->name('about');

    // ==== Contact Us
    Route::get('/contact-us', [ContactUsController::class, 'contactUs'])->name('contact-us');
});

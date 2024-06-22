<?php

use Illuminate\Support\Facades\Route;

// ==== Home Controller
use App\Http\Controllers\Frontend\HomeController;
// ==== About Controller
use App\Http\Controllers\Frontend\AboutController;
// ==== Contact Us Controller
use App\Http\Controllers\Frontend\ContactUsController;

// ==== Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// ==== About
Route::get('/about', [AboutController::class, 'about'])->name('about');

// ==== Contact Us
Route::get('/contact-us', [ContactUsController::class, 'contactUs'])->name('contact-us');

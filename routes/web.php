<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('/about-us', [HomePageController::class, 'about'])->name('about');
Route::get('/contact-us', [HomePageController::class, 'contact'])->name('contact');
Route::post('/submit/contact-us', [HomePageController::class, 'submitContact'])->name('submitContact');
Route::get('/single-rooms', [HomePageController::class, 'single'])->name('single');
Route::get('/mini-suites-roons', [HomePageController::class, 'mini'])->name('mini');
Route::get('/double-rooms', [HomePageController::class, 'double'])->name('double');
Route::get('/booking-system', [HomePageController::class, 'bookings'])->name('bookings');
Route::get('/galery', [HomePageController::class, 'gallery'])->name('gallery');
Route::get('/faqs', [HomePageController::class, 'faqs'])->name('faqs');

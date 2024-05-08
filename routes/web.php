<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('/about-us', [HomePageController::class, 'about'])->name('about');
Route::get('/contact-us', [HomePageController::class, 'contact'])->name('contact');
Route::post('/submit/contact-us', [HomePageController::class, 'submitContact'])->name('submitContact');
Route::get('/rooms/single-rooms', [HomePageController::class, 'single'])->name('single');
Route::get('/rooms/mini-suites-rooms', [HomePageController::class, 'mini'])->name('mini');
Route::get('/rooms/double-rooms', [HomePageController::class, 'double'])->name('double');
Route::get('/rooms/details', [HomePageController::class, 'roomDetails'])->name('roomDetails');
Route::get('/booking-system', [HomePageController::class, 'bookings'])->name('bookings');
Route::get('/gallery', [HomePageController::class, 'gallery'])->name('gallery');
Route::get('/faqs', [HomePageController::class, 'faqs'])->name('faqs');


<?php

use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('contact', [ContactUsFormController::class, 'store'])->name('contact');

<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/hello', [HomeController::class, 'index'])->name('home');

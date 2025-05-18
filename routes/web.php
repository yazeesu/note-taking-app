<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function () {
    Route::get('/sign-in', [AuthController::class, 'signIn'])->name('auth.login');
    Route::get('/sign-up', [AuthController::class, 'signUp'])->name('auth.register');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

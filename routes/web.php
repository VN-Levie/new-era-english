<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::prefix('login')->name('auth.login.')->group(function () {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('form');
    Route::post('/', [AuthController::class, 'login'])->name('submit');
});

Route::prefix('register')->name('auth.register.')->group(function () {
    Route::get('/', [AuthController::class, 'showRegisterForm'])->name('form');
    Route::post('/', [AuthController::class, 'register'])->name('submit');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

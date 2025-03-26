<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'login'], routes: function () {
    Route::get('/', [HomeController::class, 'login'])->name('login');
    Route::post('/', [HomeController::class, 'doLogin'])->name('login.submit');
});

Route::group(['prefix' => 'register'], routes: function () {
    Route::get('/', [HomeController::class, 'register'])->name('register');
    Route::post('/', [HomeController::class, 'doRegister'])->name('register.submit');
});

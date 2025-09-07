<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::controller(AuthController::class)->group(function () {
    Route::get('auth/login', 'showLoginForm')->name('login')->middleware('guest');
    Route::post('auth/login', 'postLogin')->name('postLogin');
    Route::post('logout', 'logout')->name('logout')->middleware('auth');
});
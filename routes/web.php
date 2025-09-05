<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{
    AuthController,
};

// Public routes
Route::redirect('/', '/auth/login');
Route::controller(AuthController::class)->group(function() {
  Route::get('auth/login', 'showLoginForm')->name('login')->middleware('guest'); // Perbarui URL
  Route::post('auth/login', 'postLogin')->name('postLogin'); // Gunakan route name untuk post login
  Route::post('logout', 'logout')->name('logout')->middleware('auth');
});

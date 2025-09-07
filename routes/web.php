<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    DashboardController,
};

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

// Routes with common 'auth' middleware
Route::middleware(['protected'])->group(function () {
  Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')
  ->middleware('checkRole:admin,guru,guru_piket,guru_bk,siswa');
  
});
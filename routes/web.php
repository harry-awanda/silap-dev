<?php

use Illuminate\Support\Facades\Route;

// Public redirect
Route::redirect('/', '/auth/login');

// Auth-only (guest/auth) routes
require __DIR__.'/auth.php';

// Semua rute yang butuh proteksi umum
Route::middleware(['auth'])->group(function () {
    require __DIR__.'/dashboard.php';     // dashboard, profil, first-change-password

});
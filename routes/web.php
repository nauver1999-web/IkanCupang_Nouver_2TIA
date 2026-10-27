<?php

use App\Http\Controllers\{AuthController, BiodataController, DashboardController, GuestController, KeahlianController, PendidikanController, PengalamanController, UserController};
use Illuminate\Support\Facades\Route;

// ===== Guest =====
Route::get('/', [GuestController::class, 'home'])->name('home');
Route::get('/tentang', [GuestController::class, 'about'])->name('about');
Route::get('/cv', [GuestController::class, 'cv'])->name('cv');
Route::get('/cv/{id}', [GuestController::class, 'cvDetail'])->name('cv.detail');
Route::get('/kontak', [GuestController::class, 'kontak'])->name('kontak');

// ===== Auth =====
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.process');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.process');
});
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// ===== Admin =====
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('biodata', BiodataController::class);
    Route::resource('pendidikan', PendidikanController::class);
    Route::resource('pengalaman', PengalamanController::class);
    Route::resource('keahlian', KeahlianController::class);

    Route::resource('user', UserController::class);
});

<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Folder\FolderController;
use Illuminate\Support\Facades\Route;

// ====================== REGISTER
Route::prefix('/register')->group(function(){
    Route::get('/', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/store', [RegisterController::class, 'register'])->name('register.store');
});

Route::get('/upload', function(){
    return view('components.upload');
});

// ====================== LOGIN
Route::prefix('/')->group(function(){
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/login/store', [LoginController::class, 'login'])->name('login.store');
});

Route::middleware(['auth'])->group(function() {
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    // ====================== DASHBOARD
    Route::prefix('/')->group(function() {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    });

    Route::prefix('/')->group(function() {
        Route::get('/folder', [FolderController::class, 'index'])->name('folder.index');
    });
});


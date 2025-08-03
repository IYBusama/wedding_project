<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Role-based dashboards
// Route::middleware([RoleMiddleware::class . ':admin'])->group(function () {
//     Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
// });

// Route::middleware([RoleMiddleware::class . ':user'])->group(function () {
//     Route::get('/user/dashboard', fn() => view('user.dashboard'))->name('user.dashboard');
// });

// Route::middleware([RoleMiddleware::class . ':service_provider'])->group(function () {
//     Route::get('/provider/dashboard', fn() => view('provider.dashboard'))->name('provider.dashboard');
// });

// Admin dashboard routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// User dashboard routes
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
});

// Service Provider dashboard routes
Route::middleware(['auth', 'role:service_provider'])->group(function () {
    Route::get('/provider/dashboard', function () {
        return view('provider.dashboard');
    })->name('provider.dashboard');
});


Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\RoleMiddleware;

//common pages
Route::get('/', function () {
    return view('common_pages.home');
});
Route::get('/about', function () {
    return view('common_pages.about');
});
Route::get('/contact', function () {
    return view('common_pages.contact');
});


//auth route
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin dashboard routes
Route::prefix('/admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/user-list', function () {
        return view('admin.user_list');
    });
    Route::get('/add-user', function () {
        return view('admin.add_user');
    });
    Route::get('/edit-user',function(){
        return view('admin.edit_user');
    });
});

// User dashboard routes
Route::prefix('/user')->middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
});

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommonPageController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleMiddleware;

//common pages
Route::get('/', [CommonPageController::class, 'showHome']);
Route::get('/about', [CommonPageController::class, 'showAbout']);
Route::get('/contact', [CommonPageController::class, 'showContact']);


//auth route
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin dashboard routes
Route::prefix('/admin')->middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');

    //admin - user function
    Route::get('/user-list', [AdminUserController::class, 'showUserList'])->name('AdminUser.showUserList');
    Route::get('/add-user', [AdminUserController::class, 'showAddUser'])->name('AdminUser.showAddUser');
    Route::post('/user-store', [AdminUserController::class, 'AddUser'])->name('AdminUser.AddUser');
    Route::get('/edit-user/{id}', [AdminUserController::class, 'showEditUser'])->name('AdminUser.showEditUser');
    Route::put('/edit-update/{id}', [AdminUserController::class, 'editUser'])->name('AdminUser.editUser');
    Route::delete('/user-delete/{id}', [AdminUserController::class, 'userDelete'])->name('AdminUser.userDelete');

    //Admin - Event function
    Route::get('/event-list', [AdminEventController::class, 'showeventList'])->name('AdminEvent.showeventList');
    Route::get('/add-event', [AdminEventController::class, 'showAddEvent'])->name('AdminEvent.showAddEvent');
    Route::post('/store-event', [AdminEventController::class, 'addEvent'])->name('AdminEvent.addEvent');
    Route::get('/edit-event/{id}', [AdminEventController::class, 'showEditEvent'])->name('AdminEvent.showEditEvent');
    Route::put('/event-store/{id}', [AdminEventController::class, 'editEvent'])->name('AdminEvent.editEvent');
    Route::delete('/event-delete/{id}', [AdminEventController::class, 'eventDelete'])->name('AdminEvent.eventDelete');

    //booking
    Route::get('/booking-list', [AdminController::class, 'showBooking'])->name('Admin.showBooking');
    Route::delete('/booking-delete', [AdminController::class, 'deleteBooking'])->name('Admin.deleteBooking');
});

// User dashboard routes
Route::prefix('/user')->middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'showDashboard'])->name('User.dashboard');
    Route::get('/book-list', [UserController::class, 'showBookingList'])->name('User.showBookingList');
    Route::get('/book', [UserController::class, 'showBooking'])->name('User.showBooking');
    Route::post('/book-store', [UserController::class, 'booking'])->name('User.booking');
    Route::get('/edit-event/{id}', [UserController::class, 'showEdit'])->name('User.showEdit');
    Route::put('/event-store/{id}', [UserController::class, 'update'])->name('User.update');
    Route::delete('/event-delete/{id}', [UserController::class, 'delete'])->name('User.delete');
});

<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AdminController;


Route::get('/', function () {
    return view('User.index');
});

// Route::get('/login', function () {
//     return view('Admin.index');
// });


//-------------------------Admin Controller--------------------------------------//
Route::get('/vocal.express', [AdminController::class, 'index']);
Route::POST('/login', [AdminController::class, 'login'])->name('admin_login');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

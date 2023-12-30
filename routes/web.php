<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ManagerController;


Route::get('/', function () {
    return view('User.index');
});

// Route::get('/login', function () {
//     return view('Admin.index');
// });


//-------------------------Admin Controller--------------------------------------//
Route::get('/vocal.express', [ManagerController::class, 'index']);
Route::POST('/login', [ManagerController::class, 'login'])->name('admin_login');
Route::get('/dashboard', [ManagerController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [ManagerController::class, 'logout'])->name('logout');

Route::get('/addAdmin', function () {
    return view('Admin.AdminPages.addAdmin');
});
Route::get('/profile', function () {
    return view('Admin.AdminPages.profile');
});
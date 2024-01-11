<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ManagerController;


Route::get('/', function () {
    return view('User.index');
});

Route::get('/userlogin', function () {
    return view('User.register');
});

// Route::get('/login', function () {
//     return view('Admin.index');
// });


//-------------------------Admin Controller--------------------------------------//
Route::get('/vocal.express', [ManagerController::class, 'index']);
Route::POST('/login', [ManagerController::class, 'login'])->name('admin_login');
Route::get('/dashboard', [ManagerController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [ManagerController::class, 'logout'])->name('logout');

Route::get('/ManageAdmin', function () {
    return view('Admin.AdminPages.adminManage');
});
Route::get('/profile', function () {
    return view('Admin.AdminPages.profile');
});

Route::get('/ManageUser', function () {
    return view('Admin.AdminPages.userManage');
});

Route::get('/ManageTeachers', function () {
    return view('Admin.AdminPages.userManage');
});

Route::get('/ManageCourses', function () {
    return view('Admin.AdminPages.userManage');
});

Route::get('/ManageMoments', function () {
    return view('Admin.AdminPages.userManage');
});
Route::get('/ManageGroups', function () {
    return view('Admin.AdminPages.userManage');
});






//-------------------------User Route--------------------------------------//



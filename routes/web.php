<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ManagerController;
use App\http\Controllers\AdminController;
use App\http\Controllers\TeacherController;
use App\http\Controllers\UserController;
use App\http\Controllers\AuthController;
use App\http\Controllers\ProfileController;
use App\http\Controllers\PostController;




Route::get('/', function () {
    return view('index');
});


Route::get('/admin_login', function () {
    return view('admin.login');
});
Route::get('/forgotpassword', function () {
    return view('User.forgotpassword');
});

//-------------------------Main Routes--------------------------------------//
Route::get('/register',[AuthController::class,'loadRegister'])->name('Usersignup');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/Userlogin',[AuthController::class,'loadLogin'])->name('Userlogin');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/Userlogout',[AuthController::class,'logout']);
Route::get('/vocal.express',[AuthController::class,'AdminloadLogin']);
Route::post('/vocal.express',[AuthController::class,'login'])->name('Adminlogin');
Route::get('/logout',[AuthController::class,'Adminlogout']);
Route::get('verify/{token}',[AuthController::class,'verify']);


//-------------------------Admin new Route--------------------------------------//

Route::group(['prefix' => 'Admin', 'middleware' => ['web','isAdmin']],function(){

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/ManageAdmin', [AdminController::class, 'manageAdmin']);
    Route::get('/profile', [AdminController::class, 'profile']);
    Route::get('/ManageUser', [AdminController::class, 'ManageUser']);
    Route::get('/ManageTeachers', [AdminController::class, 'ManageTeachers']);
    Route::get('/ManageCourses', [AdminController::class, 'ManageCourses']);
    Route::get('/ManageMoments', [AdminController::class, 'ManageMoments']);
    Route::get('/ManageGroups', [AdminController::class, 'ManageGroups']);
    
    
}); 


//-------------------------User Route--------------------------------------//

Route::group(['prefix' => 'User', 'middleware' => ['web','isUser']],function(){
        
    Route::get('/404', [UserController::class,'page404'])->name('404');
    Route::get('/vocal.express', [UserController::class,'dashboard']);
    Route::get('/index', [UserController::class,'userindex'])->name('Userhome');
    Route::get('/search-result', [UserController::class,'searchresult'])->name('searchresult');
    Route::get('/notifications', [UserController::class,'notifications'])->name('notifications');
    Route::get('/help', [UserController::class,'help'])->name('help');
    Route::get('/add-new-course', [UserController::class,'addnewcourse'])->name('addnewcourse');
    Route::get('/livestream', [UserController::class,'livestream'])->name('livestream');
    Route::get('/videos', [UserController::class,'uservideo'])->name('videos');
    Route::get('/cources', [UserController::class,'Usercources'])->name('cources');
    Route::get('/books', [UserController::class,'books'])->name('books');
    Route::get('/groups', [UserController::class,'groups'])->name('groups');
    Route::get('/settings', [UserController::class,'settings'])->name('settings');
    Route::get('/product-cart', [UserController::class,'productcart'])->name('product-cart');
    Route::get('/profile', [UserController::class,'userProfile'])->name('profile');
    Route::get('/pay-out', [UserController::class,'payout'])->name('pay-out');
    Route::get('/price-plan', [UserController::class,'priceplan'])->name('price-plan');
    Route::get('/privacy-n-policy', [UserController::class,'privacypolicy'])->name('privacy-n-policy');
    Route::get('/blog', [UserController::class,'blog'])->name('blog');
    Route::get('/message', [UserController::class,'message'])->name('message');

//--------------------------------**** Action Routes****--------------------------------------//

    Route::post('/post',[PostController::class,'store'])->name('post.create');
    Route::post('/profile', [ProfileController::class,'updateCover'])->name('profile.updatecover');
    Route::post('/profile/avatar', [ProfileController::class,'updateAvatar'])->name('profile.updateAvatar');
    

}); 

//-------------------------Teacher Route--------------------------------------//

Route::group(['prefix' => 'User', 'middleware' => ['web','isTeacher']],function(){
          
   

}); 








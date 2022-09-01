<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['auth','isUser'])->group(function () {
    
    Route::get('/postshow',[loginController::class, 'tableshow']);

    Route::get('/add/postdata',[PostController::class, 'add_postdata']);

    Route::post('/postdata/submit',[PostController::class, 'postdatasubmit']);

    Route::get('/user/profile',[HomeController::class, 'userprofile']);
    
    Route::get('/showpost/user' ,[HomeController::class, 'showuserallpost']);


});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    
    Route::get('/admin/postshow',[AdminController::class, 'admintableshow']);
    
    Route::delete('/delete/{id}', [AdminController::class, 'destroy']); 

    Route::get('/admin/allposts',[AdminController::class, 'posts']);

    Route::post('/admin/accept/{id}',[AdminController::class, 'accept']);

    Route::delete('/delete/post/{id}', [AdminController::class, 'deletepost']);

    Route::get('/profile',[AdminController::class, 'adminprofile']);

    Route::get('/showpost',[AdminController::class, 'Adminshowuserallpost']);

    Route::get('/admin/add/postdata',[AdminController::class, 'Adminshowuserallpost']);

    

});

Route::get('/logout',[LogoutController::class, 'logout']);

Route::get('/home',[HomeController::class, 'register']);

Route::post('/submit',[HomeController::class, 'submit']);

Route::get('/login',[loginController::class, 'login'])->name('login');

Route::post('/login/submit',[loginController::class, 'loginSubmit']);








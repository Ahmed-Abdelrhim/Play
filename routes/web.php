<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayController;
use App\Http\Controllers\CustomLoginController;
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
//Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[CustomLoginController::class,'showLoginForm'])->name('login')->middleware('guest:author');
Route::post('login',[CustomLoginController::class,'login'])->name('signIn')->middleware('guest');
Route::get('logout',[CustomLoginController::class,'logout']);


Route::get('play/{id}',[PlayController::class,'play']);


Route::group(['middleware' => 'auth:author' ],function () {
    Route::post('logout',[CustomLoginController::class,'logout'])->name('logout');
    Route::get('/home', [HomeController::class, 'index'])->name('home');


    Route::get('restore/post/{id}',[PlayController::class , 'restoreBlogPosts']);
    Route::get('all/posts',[PlayController::class,'showAllPosts']);
    Route::get('posts/{id}' , [PlayController::class , 'showPosts']);


    Route::get('add/blogPost' , [PlayController::class,'showBlogPostForm']);
    Route::get('adding/blogPost' , [PlayController::class,'addBlogPost'])->name('create.blogPost');
    Route::get('update/post/{id}',[PlayController::class,'updateBlogPost'])->name('update-post');
    Route::post('update/post/{id}',[PlayController::class,'storeBlogPost'])->name('update.post');
    Route::get('delete/post/{id}',[PlayController::class , 'destroy'])->name('delete.post');

});




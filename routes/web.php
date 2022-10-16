<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PaymentController;
use App\Models\PaymentPlatform;
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
Route::post('logout',[CustomLoginController::class,'logout']);


Route::get('play/{id}',[PlayController::class,'play']);


Route::group(['middleware' => 'auth:author' ],function () {
    Route::post('logout',[CustomLoginController::class,'logout'])->name('logout');
    Route::get('/home', [HomeController::class, 'index'])->name('home');


    Route::get('payment',[PaymentController::class,'showPaymentForm'])->name('pay');
    Route::get('restore/post/{id}',[PlayController::class , 'restoreBlogPosts']);
    Route::get('all/posts',[PlayController::class,'showAllPosts'])->name('blog_posts');
    Route::get('posts/{id}' , [PlayController::class , 'showPosts'])->name('show.blog_post.by.id');


    Route::get('add/blogPost' , [PlayController::class,'showBlogPostForm'])->name('add.blog_post');
    Route::get('adding/blogPost' , [PlayController::class,'addBlogPost'])->name('create.blogPost');
    Route::get('update/post/{id}',[PlayController::class,'updateBlogPostForm'])->name('update.post.form');
    Route::post('update/post/{id}',[PlayController::class,'storeBlogPost'])->name('update.post');
    Route::get('delete/post/{id}',[PlayController::class , 'destroy'])->name('delete.post');

    Route::get('send/message',[MailController::class,'sendEmail'])->name('send.gmail');
    Route::get('play/with/livewire',function(){
        return view('play');
    })->name('livewire');

});
Route::get('hash',function (){
    return bcrypt('12345678');
});

Route::get('most/active/last/month',[PlayController::class,'activeLastMonthAuthor'])->name('most.active.last.month');


// npm run watch
// npm run development --watch

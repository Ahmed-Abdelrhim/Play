<?php

use App\Http\Controllers\API\BlogPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


################################ Auth  ################################
Route::get('register',[BlogPostController::class,'register']);
Route::post('login',[BlogPostController::class,'login']);
Route::post('logout',[BlogPostController::class,'logout']);
################################ Auth  ################################

Route::group(['middleware'=> 'auth:sanctum'],function() {
    Route::get('posts',[BlogPostController::class,'index']);
    Route::get('post/{id}',[BlogPostController::class,'show']);
    Route::post('store/post',[BlogPostController::class,'storePost']);
    Route::post('update/post/{id}',[BlogPostController::class,'updateBlogPost']);
});

// http://127.0.0.1:8000/api/store/post

<?php

use App\Http\Controllers\API\BlogPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CommentsController;
use App\Http\Controllers\PaymentController;

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

Route::post('pay/goo',[PaymentController::class,'pay']);
Route::get('success/callback',[PaymentController::class,'successCallback']);
Route::get('error/callback',[PaymentController::class,'errorCallback']);
Route::get('play',[PaymentController::class,'play']);



################################ Auth  ################################
Route::get('register',[BlogPostController::class,'register']);
Route::post('login',[BlogPostController::class,'login']);

Route::post('register/comments',[CommentsController::class,'register']);
Route::post('login/comments',[CommentsController::class,'login']);


################################ Auth  ################################

Route::group(['middleware'=> 'auth:sanctum'],function() {
    Route::get('posts',[BlogPostController::class,'index']);
    Route::post('store/post',[BlogPostController::class,'storePost']);
    Route::post('update/post/{id}',[BlogPostController::class,'updateBlogPost']);
    Route::get('post/{id}',[BlogPostController::class,'show']);
    Route::post('go/logout',[BlogPostController::class,'logout']);

    Route::get('comments/all' , [CommentsController::class,'index']);

    ########################## Comments Controller  ##########################

    ########################## Comments Controller  ##########################

});
// Bearer 8|bvdJN5psvglirLsO2DVWWm84tMCOGNwUHumxElpy

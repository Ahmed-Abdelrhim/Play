<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Comments\CommentsController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaymentController;
use App\Models\PaymentPlatform;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayController;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\ProblemsController;
use App\Http\Controllers\Files\ImagesController;
use App\Http\Controllers\SpatieController;
use App\Http\Controllers\Files\FilesController;
use App\Http\Controllers\Products\ProductController;

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
Route::group(['middleware' => 'disable_back_btn'], function () {


    Route::get('not-found-page', [PlayController::class, 'errorPage'])->name('error');
//Route::get('s3',function (){
//    return view('s3');
//});

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('play/{id}', [PlayController::class, 'play']);
    Route::get('solve', [BlogPostController::class, 'problemSolving']);

    Route::group(['middleware' => 'guest:author'], function () {
        Route::get('login', [CustomLoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [CustomLoginController::class, 'login'])->name('signIn')->middleware('guest');
        Route::post('logout', [CustomLoginController::class, 'logout']);
        Route::get('register/now', [CustomLoginController::class, 'showRegisterForm'])->name('register');
        Route::post('register/To/Login', [CustomLoginController::class, 'register'])->name('register.post');
    });


    Route::get('play/{id}', [PlayController::class, 'play']);


    Route::group(['middleware' => 'auth:author'], function () {
        Route::post('logout', [CustomLoginController::class, 'logout'])->name('logout');
        Route::get('/home', [HomeController::class, 'index'])->name('home');


        Route::get('payment', [PaymentController::class, 'pay'])->name('pay');
        // Route::post('pay/goo',[PaymentController::class,'pay']);

        Route::get('restore/post/{id}', [PlayController::class, 'restoreBlogPosts']);
        Route::get('all/posts', [PlayController::class, 'showAllPosts'])->name('blog_posts');
        Route::get('posts/{id}', [PlayController::class, 'showPosts'])->name('show.blog_post.by.id');

        Route::get('show/dataTables/blogposts', [LearnController::class, 'showDataTablesIndex'])->name('dataTables')
            ->middleware('permission:create product');

        // Edit Post

        Route::get('get/dataTables/blogposts/all', [LearnController::class, 'getDataTablesIndex'])->name('dataTables.all');


        Route::get('add/blogPost', [PlayController::class, 'showBlogPostForm'])->name('add.blog_post')
            ->middleware('permission:create product');
        // permission:write post
        Route::get('adding/blogPost', [PlayController::class, 'addBlogPost'])->name('create.blogPost');
        Route::get('update/post/{id}', [PlayController::class, 'updateBlogPostForm'])->name('update.post.form');
        Route::post('update/post/{id}', [PlayController::class, 'updateBlogPost'])->name('update.post');
        Route::delete('delete/post/{id}', [PlayController::class, 'destroy'])->name('delete.post');

        Route::get('test', function () {
            return view('test');
        });
        Route::get('test/test', [])->name('stripe.post');

        Route::get('email-send', [MailController::class, 'viewSendEmailForm'])->name('sending-email');
        Route::post('send/message', [MailController::class, 'sendEmail'])->name('send.gmail');
        Route::get('check-verified-code', [MailController::class, 'checkVerificationCodeForm'])->name('check.verification.code');
        Route::post('check-mobile-number', [MailController::class, 'checkMobileNumber'])->name('check.mobile_no');
        Route::post('check/verification/code', [MailController::class, 'checkVerificationCode'])->name('check.code');

        Route::get('play/with/livewire', function () {
            return view('play');
        })->name('livewire');

        Route::get('callback', function () {
            return 'Success';
        });
        Route::get('error', function () {
            return 'Error';
        });

        Route::get('show/upload', [PlayController::class, 'uploadForm'])->name('upload.form');
        Route::post('upload', [PlayController::class, 'upload'])->name('upload');

        Route::get('user/profile', [PlayController::class, 'viewProfilePage'])->name('profile');
        Route::post('save/profile/data', [PlayController::class, 'storeUserProfileData'])->name('post.profile.data');
        Route::post('download/profile/image', [SpatieController::class, 'downloadImageProfile'])->name('download.profile.image');

        Route::get('spatie', [SpatieController::class, 'handle'])->name('spatie-media');


        ################### Custom Play  ###################

        Route::get('all-posts', [BlogPostController::class, 'index'])->name('all-posts');
        Route::get('show/{id}', [BlogPostController::class, 'show'])->name('only.show');
        Route::post('update/{id}', [BlogPostController::class, 'update'])->name('only.update');

        Route::get('add/comment', [CommentsController::class, 'addCommentForm'])->name('add.comment');
        Route::post('store/comment', [CommentsController::class, 'storeComment'])->name('store.comment');

        Route::get('excel', [LearnController::class, 'playWithExcel']);

        Route::get('playy', [LearnController::class, 'play'])->middleware('can:play');
        Route::get('problem', [ProblemsController::class, 'solveFirst']);
        Route::get('temp', [ProblemsController::class, 'tempProblem']);
        Route::get('strings', [ProblemsController::class, 'strings']);

        Route::get('many', [ImagesController::class, 'uploadForm']);

        Route::post('upload-multiple', [ImagesController::class, 'uploadMultipleImages'])->name('multiple.images');


        ######################################################################################
        Route::group(['prefix' => 'product', 'as' => 'product.'], function () {

            Route::get('permissions', [SpatieController::class, 'productPermissions']);


            Route::get('All', [ProductController::class, 'index'])->name('index');

            Route::get('products/all/datatables', [ProductController::class, 'ajax'])->name('dataTables');

            Route::get('create', [ProductController::class, 'showCreateProductForm'])
                ->middleware('permission:create product')->name('create');

            Route::post('store', [ProductController::class, 'storeProduct'])->name('store')
                ->middleware('permission:create product');

            Route::get('/show/{id}/{start?}/{end?}', [ProductController::class, 'show'])->name('show');

            Route::get('cart/{id}/{start?}/{end?}', [CartController::class, 'addToCart'])->name('to.cart');

            Route::get('cart', [CartController::class, 'viewCartPage'])->name('view.cart');
            Route::get('increment/quantity/{id}', [CartController::class, 'incrementQty'])->name('inc.qty');
            Route::get('decrement/quantity/{id}', [CartController::class, 'decrementQty'])->name('dec.qty');


            Route::get('destroy/{id}', [CartController::class, 'deleteFromCart'])->name('destroy.cart');

            Route::get('buy/{id}', [PaymentController::class, 'pay'])->name('buy');
            Route::get('checkout/{ids}', [PaymentController::class, 'checkout'])->name('checkout');

            Route::get('edit/product/{start?}/{id}/{end}', [ProductController::class, 'showUpdateProductForm'])->name('edit')
                ->middleware('permission:update product');


            Route::delete('delete/product/{id}', [ProductController::class, 'deleteProduct'])
                ->middleware('permission:delete product')
                ->name('delete');
        });

    });
    Route::get('hash', function () {
        $user = auth()->guard('author')->user();
        return $user->hasPermissionTo('delete product');

//         return bcrypt('12345678');
    });

    Route::get('sweet', [ImagesController::class, 'sweet']);

    Route::get('most/active/last/month', [PlayController::class, 'activeLastMonthAuthor'])->name('most.active.last.month');

    Route::get('send/gmail', [MailController::class, 'sendMailForm']);
    Route::post('send/gmail/msg', [MailController::class, 'send'])->name('email.send');


    Route::get('send/sms', [MailController::class, 'sendSms'])->name('send.sms');
    Route::get('download', [SpatieController::class, 'download']);

    Route::get('export', [FilesController::class, 'export'])->name('export.excel');

    Route::get('sub', [FilesController::class, 'subMonth'])->name('sub');


    // Language
    Route::get('language/{locale}', [HomeController::class, 'change_locale'])->name('change_locale');
    Route::get('image', [FilesController::class, 'PlayWithImages']);
    Route::get('give/any/name', [FilesController::class, 'methodName'])->name('give.any.name');

    ####################################################################################################################


});


/*
 * ----------------------------------------------------------------------------------------------------
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -
 * ----------------------------------------------------------------------------------------------------
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -
 * -                         -                                    -                                   -                                    -                                   -
 * ----------------------------------------------------------------------------------------------------
 */


Route::get('sidebar', function () {
    return view('layouts.sidebar');
});


Route::get('success/transaction', [ProductController::class, 'success']);
Route::get('error/transaction', [ProductController::class, 'error']);

Route::get('session', [ProductController::class, 'sessionMethod'])->name('session');



// composer create-project --prefer-dist laravel/laravel name:8.*



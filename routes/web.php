<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\AttendController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

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



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/aboutus',[HomeController::class,'aboutus'])->name('home_aboutus');
Route::get('/contact',[HomeController::class,'contact'])->name('home_contact');
Route::get('/reference',[HomeController::class,'reference'])->name('home_reference');
Route::post('/sendmessage',[HomeController::class,'sendmessage'])->name('home_sendmessage');
Route::get('/faq',[HomeController::class,'faq'])->name('home_faq');

Route::get('/categoryplaces/{id}',[HomeController::class,'categoryplaces'])->name('home_categoryplaces');
Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class,'index']);
Route::get('/placedetail/{id}',[HomeController::class,'placeDetail'])->name('home_placeDetail');

Route::get('/place/{id}',[HomeController::class,'place'])->name('place');
Route::post('/getplace',[HomeController::class,'getplace'])->name('getplace');
Route::get('/getplacelist/{search}',[HomeController::class,'getplacelist'])->name('getplacelist');


Route::middleware('auth')->prefix('admin')->group(function(){
    Route::middleware('admin')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');

        #Category
        Route::get('/category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
        Route::get('/category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
        Route::post('/category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
        Route::get('/category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
        Route::post('/category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
        Route::get('/category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
        Route::get('/category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

        #Content
        Route::prefix('content')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\ContentController::class,'index'])->name('admin_content');
            Route::get('add',[\App\Http\Controllers\Admin\ContentController::class,'add'])->name('admin_content_add');
            Route::post('create',[\App\Http\Controllers\Admin\ContentController::class,'create'])->name('admin_content_create');
            Route::get('edit/{id}',[\App\Http\Controllers\Admin\ContentController::class,'edit'])->name('admin_content_edit');
            Route::post('update/{id}',[\App\Http\Controllers\Admin\ContentController::class,'update'])->name('admin_content_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\ContentController::class,'destroy'])->name('admin_content_delete');
            Route::get('show',[\App\Http\Controllers\Admin\ContentController::class,'show'])->name('admin_content_show');
        });

        #Message
        Route::prefix('messages')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
            Route::get('edit/{id}',[\App\Http\Controllers\Admin\MessageController::class,'edit'])->name('admin_message_edit');
            Route::post('update/{id}',[\App\Http\Controllers\Admin\MessageController::class,'update'])->name('admin_message_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('admin_message_delete');
            Route::get('show',[\App\Http\Controllers\Admin\MessageController::class,'show'])->name('admin_message_show');
        });

        #Image
        Route::prefix('image')->group(function (){
            Route::get('add/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'add'])->name('admin_image_add');
            Route::post('create/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_create');
            Route::get('delete/{id}/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
            Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
        });

        #Comment
        Route::prefix('comment')->group(function (){
            Route::get('/',[CommentController::class,'index'])->name('admin_comment');
            Route::post('update/{id}',[CommentController::class,'update'])->name('admin_comment_update');
            Route::get('delete/{id}',[CommentController::class,'destroy'])->name('admin_comment_delete');
            Route::get('show/{id}',[CommentController::class,'show'])->name('admin_comment_show');
        });
        #Setting
        Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
        Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

        #Faq
        Route::prefix('faq')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\FaqController::class,'index'])->name('admin_faq');
            Route::get('add',[\App\Http\Controllers\Admin\FaqController::class,'add'])->name('admin_faq_add');
            Route::post('create',[\App\Http\Controllers\Admin\FaqController::class,'create'])->name('admin_faq_create');
            Route::get('edit/{id}',[\App\Http\Controllers\Admin\FaqController::class,'edit'])->name('admin_faq_edit');
            Route::post('update/{id}',[\App\Http\Controllers\Admin\FaqController::class,'update'])->name('admin_faq_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\FaqController::class,'destroy'])->name('admin_faq_delete');
            Route::get('show',[\App\Http\Controllers\Admin\FaqController::class,'show'])->name('admin_faq_show');
        });
    });

});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function(){
    Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('myprofile');
    Route::get('/mycomments',[\App\Http\Controllers\UserController::class,'mycomments'])->name('mycomments');
    Route::get('/destroymycomment/{id}',[CommentController::class,'destroymycomments'])->name('user_comment_delete');
});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function(){
    Route::get('/profile',[\App\Http\Controllers\UserController::class,'index'])->name('profile.show');

    #Content
    Route::prefix('content')->group(function (){
        Route::get('/',[ContentController::class,'index'])->name('user_content');
        Route::get('add',[ContentController::class,'add'])->name('user_content_add');
        Route::post('create',[ContentController::class,'create'])->name('user_content_create');
        Route::get('edit/{id}',[ContentController::class,'edit'])->name('user_content_edit');
        Route::post('update/{id}',[ContentController::class,'update'])->name('user_content_update');
        Route::get('delete/{id}',[ContentController::class,'destroy'])->name('user_content_delete');
        Route::get('show',[ContentController::class,'show'])->name('user_content_show');
    });

    #Image
    Route::prefix('image')->group(function (){
        Route::get('add/{content_id}',[ImageController::class,'add'])->name('user_image_add');
        Route::post('create/{content_id}',[ImageController::class,'create'])->name('user_image_create');
        Route::get('delete/{id}/{content_id}',[ImageController::class,'destroy'])->name('user_image_delete');
        Route::get('show',[ImageController::class,'show'])->name('user_image_show');
    });


    #Attend
    Route::prefix('attend')->group(function (){
        Route::get('/',[AttendController::class,'index'])->name('user_attend');
        Route::post('create/{id}',[AttendController::class,'create'])->name('user_attend_create');
        Route::get('delete/{id}',[AttendController::class,'destroy'])->name('user_attend_delete');

    });
});

Route::get('/admin/login',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::get('logout',[\App\Http\Controllers\Admin\HomeController::class,'logout'])->name('logout');
Route::post('/admin/logincheck',[\App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

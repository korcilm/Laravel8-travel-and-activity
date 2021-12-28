<?php

use App\Http\Controllers\HomeController;
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
Route::get('/place',[HomeController::class,'place'])->name('home_place');
Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class,'index']);


Route::middleware('auth')->prefix('admin')->group(function(){
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

    #Image
    Route::prefix('image')->group(function (){
        Route::get('add/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'add'])->name('admin_image_add');
        Route::post('create/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_create');
        Route::get('delete/{id}/{content_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });

    #Setting
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function(){
    Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('myprofile');
});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function(){
    Route::get('/profile',[\App\Http\Controllers\UserController::class,'index'])->name('profile.show');
});

Route::get('/admin/login',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::get('logout',[\App\Http\Controllers\Admin\HomeController::class,'logout'])->name('logout');
Route::post('/admin/logincheck',[\App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

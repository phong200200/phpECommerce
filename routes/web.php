<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\LoginController as UserLoginController;
use App\Http\Controllers\User\SignUpController;
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

Route::get('/', [IndexController::class, 'index']) -> name('index');

Route::get('user/login', [UserLoginController::class, 'index'])->name('login');
Route::post('/admin/users/login/store', [UserLoginController::class, 'store']);

Route::group(['prefix'=>'users', 'as'=>'users'], function(){
    Route::get('signup', [SignUpController::class, 'index']);
    Route::post('signup', [SignUpController::class, 'store']);
});



Route::middleware(['auth'])->group(function () {

    Route::group(['prefix'=>'admin', 'as'=>'admin'], function(){
        Route::get('/', [MainController::class, 'index']);
        Route::group(['prefix'=>'products','as'=>'product'], function(){
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
        });

        Route::group(['prefix'=>'categories','as'=>'category'], function(){
            Route::get('add', [CategoryController::class, 'create']);
            Route::post('add', [CategoryController::class, 'store']);
            Route::get('list', [CategoryController::class, 'index']);
        });
    });
});
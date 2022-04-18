<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Products\CartController;
use App\Http\Controllers\Products\OrderController;
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



Route::get('cate/{cateid}', [IndexController::class, 'changecate']);
Route::get('/', [IndexController::class, 'index']) -> name('index');


Route::get('user/login', [UserLoginController::class, 'index'])->name('login');

Route::group(['prefix'=>'users', 'as'=>'users'], function(){
    Route::get('signup', [SignUpController::class, 'index']);
    Route::post('signup', [SignUpController::class, 'store']);
});

Route::group(['prefix'=>'product', 'as'=>'product'], function(){
    Route::get('details/{product}', [ProductController::class, 'details']);
});

Route::group(['prefix'=>'shopping', 'as'=>'shopping'],function(){
    Route::group(['prefix'=>'cart', 'as'=>'cart'], function(){
        Route::get('add/{id}', [CartController::class, 'addtocart']);
        Route::get('get', [CartController::class, 'index']);
        Route::post('post', [CartController::class, 'postFromCheckout']) -> name('postcart')    ;
        Route::get('clear', [CartController::class, 'deleteSession']);
        Route::get('delete/{id}',[CartController::class, 'deleteCartItem']);
        Route::get('delelefromcheckout/{id}', [CartController::class, 'delelefromcheckout']);
    });
    Route::group(['prefix'=>'order', 'as'=>'order'], function(){
        Route::get('get', [OrderController::class, 'index']);
    });
});
Route::get('manage', [MainController::class, 'index']) -> name('management');
Route::post('/admin/users/login/store', [UserLoginController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::group(['prefix'=>'admin', 'as'=>'admin'], function(){
        
        Route::group(['prefix'=>'product','as'=>'product'], function(){
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::DELETE('destroy', [ProductController::class, 'delete']);
            Route::get('edit/{product}',[ProductController::class, 'edit']);
            Route::post('edit/{product}', [ProductController::class, 'postedit']);
        });

        Route::group(['prefix'=>'categories','as'=>'category'], function(){
            Route::get('add', [CategoryController::class, 'create']);
            Route::post('add', [CategoryController::class, 'store']);
            Route::get('list', [CategoryController::class, 'index']);
        });
    });
});
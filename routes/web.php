<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', [ProductController::class,'index']);
Route::get('/detail/{id}', [ProductController::class, 'show'])->name('detail');

Route::resource('admin/categories', CategoryController::class);
Route::resource('admin/order', OrderController::class);
Route::resource('admin/dishes', DishController::class);
Route::delete('admin/dishes/{id}', 'DishesController@destroy');


Route::get('/login', function () {
    return view('customLogin');
});
Route::get('/register', function () {
    return view('customRegister');
});

Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/cart', function () {
    return view('cartView');
})->name('cart');


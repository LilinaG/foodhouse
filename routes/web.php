<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/detail', function () {
    return view('detailView');
});

Route::get('/cart', function () {
    return view('cartView');
});

Route::resource('admin/categories', CategoryController::class);
Route::resource('admin/dishes', DishController::class); //creamos todas las rutas necesarias del crud
Route::delete('admin/dishes/{id}', 'DishesController@destroy');


Route::resource('admin/order', OrderController::class); //creamos todas las rutas necesarias del crud

Route::get('/login', function () {
    return view('customLogin');
});

Route::get('/register', function () {
    return view('customRegister');
});






Route::get('/', [App\Http\Controllers\ProductController::class,'index']);

Auth::routes();
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
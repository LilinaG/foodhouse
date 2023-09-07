<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;


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
Route::get('/cart', function () {
    return view('cartView');
});
Route::get('/', [ProductController::class,'index']);
Route::get('/detail/{id}', [ProductController::class, 'show']);

Auth::routes();

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DishController;


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

Route::get('/login', function () {
    return view('customLogin');
});

Route::get('/register', function () {
    return view('customRegister');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

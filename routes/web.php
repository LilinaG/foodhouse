<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/detail', function () {
    return view('detailView');
});

Route::get('/cart', function () {
    return view('cartView');
});


Route::resource('dishes', DishesController::class); //creamos todas las rutas necesarias del crud
Route::delete('/dishes/{id_dish}', 'DishesController@destroy');

Route::get('/login', function () {
    return view('customLogin');
});

Route::get('/register', function () {
    return view('customRegister');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/admin/category/index', [CategoryController::class, 'index']) ->name('adminViews.categoryIndex');
Route::get('/admin/category/create', [CategoryController::class, 'create']) ->name('adminViews.categoryCreate');
Route::post('/admin/category/store', [CategoryController::class, 'store']) ->name('adminViews.categoryStore');
Route::get('/admin/category/edit/{category}', [CategoryController::class, 'edit']) ->name('adminViews.categoryEdit');
Route::put('/admin/category/update/{category}', [CategoryController::class, 'update']) ->name('adminViews.categoryUpdate');
Route::delete('/admin/category/destroy/{category}', [CategoryController::class, 'destroy']) ->name('adminViews.categoryDestroy');



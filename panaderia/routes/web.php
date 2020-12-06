<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\DomiciliaryController;
use App\Models\Product;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[\App\Http\Controllers\AdminController::class,'index'])->name('administrador')->middleware('auth');
Route::resource('products', 'App\Http\Controllers\ProductController'::class)->middleware('auth');
Route::resource('categories', 'App\Http\Controllers\CategoryController'::class)->middleware('auth');
Route::resource('vendors', 'App\Http\Controllers\VendorsController'::class)->middleware('auth');
Route::resource('domiciliary', 'App\Http\Controllers\DomiciliaryController'::class)->middleware('auth');

Auth::routes();


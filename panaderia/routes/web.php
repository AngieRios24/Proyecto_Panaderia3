<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\DomiciliaryController;
use App\Http\Controllers\VistaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\VendorController;
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

Route::get('/index',[\App\Http\Controllers\AdminController::class,'index'])->name('principal');
Route::resource('products', 'App\Http\Controllers\ProductController'::class);
Route::resource('categories', 'App\Http\Controllers\CategoryController'::class);
Route::resource('vendors', 'App\Http\Controllers\VendorsController'::class);
Route::resource('domiciliary', 'App\Http\Controllers\DomiciliaryController'::class);
Route::resource('productos', 'App\Http\Controllers\VistaController'::class);
Route::get('/carrito',[\App\Http\Controllers\CarritoController::class,'index'])->name('carrito');
Route::get('/ventas',[\App\Http\Controllers\VendorController::class,'index'])->name('Vendedor');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\DomiciliaryController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/dueno',[\App\Http\Controllers\AdminController::class,'index'])->name('dueno')->middleware('auth');
Route::resource('products', 'App\Http\Controllers\ProductController'::class)->middleware('auth');
Route::resource('categories', 'App\Http\Controllers\CategoryController'::class)->middleware('auth');
Route::resource('vendors', 'App\Http\Controllers\VendorsController'::class)->middleware('auth');
Route::resource('domiciliary', 'App\Http\Controllers\DomiciliaryController'::class)->middleware('auth');
Route::get('productos', [\App\Http\Controllers\VistaController::class,'index'])->name('productos')->middleware('auth','cliente');
Route::get('vendedor',[\App\Http\Controllers\VendorController::class,'index'])->name('vendedor')->middleware('auth');


Route::post('/add-cart',[\App\Http\Controllers\CartController::class,'add'])->name('add-cart')->middleware('auth');;
Route::get('/cart-checkout',[\App\Http\Controllers\CartController::class,'cart'])->name('cart-checkout')->middleware('auth');;
Route::post('/cart-clear',[\App\Http\Controllers\CartController::class,'clear'])->name('cart-clear')->middleware('auth');;
Route::post('/cart-removeitem',[\App\Http\Controllers\CartController::class,'removeitem'])->name('cart-removeitem')->middleware('auth');;

Route::get('/verificar',[\App\Http\Controllers\CartController::class,'verificar'])->name('verificar')->middleware('auth');;
Route::post('/proceso',[\App\Http\Controllers\CartController::class,'procesopedido'])->name('proceso')->middleware('auth');;
Auth::routes();

/* PASARELAS DE PAGO */
Route::get('pago',[\App\Http\Controllers\StripeController::class,'stripe'])->name('stripe')->middleware('auth');;
Route::post('checkout',[App\Http\Controllers\StripeController::class,'pay'])->name('productos.confirmar')->middleware('auth');;
Auth::routes();



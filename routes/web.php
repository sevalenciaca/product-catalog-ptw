<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SaleController;
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

Route::get('/{customer?}', [ProductController::class, 'home'])->name('home');
Route::prefix('admin')->group(function () {
    Route::resource('productos', ProductController::class)->names('products');
    Route::resource('clientes', CustomerController::class)->names('customers');
});
Route::get('venta/{customer}/{product}', SaleController::class)->name('sale');
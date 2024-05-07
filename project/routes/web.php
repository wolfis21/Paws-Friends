<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

/*Rutas Modulo 4 */

Route::get('/store', [App\Http\Controllers\StoreController::class, 'main'])->name('store.main');
Route::get('/store/products', [App\Http\Controllers\StoreController::class, 'products'])->name('store.products');
Route::get('/store/products/{product_id}', [App\Http\Controllers\StoreController::class, 'products_details'])->name('store.products.details');
Route::get('/store/recommendations', [App\Http\Controllers\StoreController::class, 'recommendations'])->name('store.recomendations');

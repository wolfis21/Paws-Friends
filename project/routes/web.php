<?php

use Illuminate\Support\Facades\Route;
//CONTROLADOR 
use App\Http\Controllers\DemandAnimalController;


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

Route::get('/main', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::resource('/rescate', DemandAnimalController::class);
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

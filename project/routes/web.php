<?php

use App\Http\Controllers\AdopcionesController;
use App\Http\Controllers\AdopcionesVermasController;
use App\Http\Controllers\DonacionesController;
use App\Http\Controllers\FormularioAdopcionesController;
use App\Http\Controllers\FormularioDonacionesController;
use App\Http\Controllers\welcomeController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcome', welcomeController::class);
Route::resource('/Donaciones', DonacionesController::class);
Route::resource('/Adopciones', AdopcionesController::class);
Route::resource('/FormularioAdopciones', FormularioAdopcionesController::class);
Route::resource('/FormularioDonaciones', FormularioDonacionesController::class);
Route::resource('/AdopcionesVermas', AdopcionesVermasController::class);

Auth::routes();
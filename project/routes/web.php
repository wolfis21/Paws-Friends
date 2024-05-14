<?php

use App\Http\Controllers\AdminPlantillacController;
use App\Http\Controllers\AdopcionesController;
use App\Http\Controllers\AdopcionesVermasController;
use App\Http\Controllers\AnimalsAdoptionController;
use App\Http\Controllers\DonacionesController;
use App\Http\Controllers\FormularioAdopcionesController;
use App\Http\Controllers\FormularioDonacionesController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\welcomeController;
use App\Models\animals_adoption;
use Illuminate\Support\Facades\Auth;
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
Route::resource('/Nosotros', NosotrosController::class);
Route::resource('/Historia', HistoriaController::class);
Route::resource('/animals_adoptions', AnimalsAdoptionController::class);
route::resource('/AdminP','App\Http\controllers\AdminPlantillaControllerController'::class);
route::resource('/AdminPP','App\Http\controllers\AnimalsAdoptionController'::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


<?php


use App\Http\Controllers\HomeServicesController;
use App\Http\Controllers\HousingsController;
use App\Http\Controllers\VeterinarianController;
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

Route::get('/', HomeServicesController::class);
// Route::get('/housings')
//vistas de Vets
Route::get('/vets', [VeterinarianController::class, 'vetuser'])->name('vets');
Route::get('/admin/vets', [VeterinarianController::class, 'index'])->name('vetsadmin');
//rutas de housings
Route::get('/housings', [HousingsController::class, 'index'])->name('housing');
// to do: dog_groomer
//ver como integrar los comments

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

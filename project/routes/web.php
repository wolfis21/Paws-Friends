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
Route::get('/user/vets', [VeterinarianController::class, 'vetuser'])->name('vetsuser');
Route::resource('/admin/vets', VeterinarianController::class);
Route::put('/user/vets/update/{id}', [App\Http\Controllers\VeterinarianController::class, 'update'])->name('update');
//rutas de housings
Route::get('/user/housings', [HousingsController::class, 'housinguser'])->name('housinguser');
Route::get('/admin/housings', [HousingsController::class, 'index'])->name('housingadmin');
// to do: dog_groomer
//ver como integrar los comments

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

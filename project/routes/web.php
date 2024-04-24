<?php

use App\Http\Controllers\DogGroomerController;
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

//! Ruta,nombre de la funcion en el controlador, nombre dado en el html
Route::controller(VeterinarianController::class)->group(function(){
    //todo rutas admin



    //todo rutas user
    Route::get('/Veterinario','veterinarioUser')->name('Veterinario');
});

//todo rutas de housings
Route::controller(HousingsController::class)->group(function(){
    //todo rutas admin
    Route::resource('/admin/housings', HousingsController::class);
    Route::get('/admin/housingsAdmin', 'housingAdmin')->name('housingAdmin');
    Route::get('/admin/createHousing', 'createHousing')->name('createHousing');
    Route::put('/admin/storeHousings', 'storeHousing')->name('storeHousing');
    Route::get('/admin/editHousing/{id}', 'editHousing')->name('editHousing');
    Route::put('/admin/updateHousing/{id}', 'updateHousing')->name('updateHousing');
    Route::delete('/admin/destroyHousing/{id}', 'destroyHousing')->name('destroyHousing');
    
    //todo rutas user
    Route::resource('/user/housings', HousingsController::class);
    Route::get('/user/housings', 'housingUser')->name('housingUser');
});
//----------------------------------------------------------------
// todo: rutas de dog_groomer
Route::controller(DogGroomerController::class)->group(function(){
    //todo rutas admin
    Route::resource('/admin/DogGroomers', DogGroomerController::class);
    Route::get('/admin/DogGroomersAdmin', 'dogGroomerAdmin')->name('dogGroomerAdmin');
    Route::get('/admin/createDogGroomer', 'createDogGroomer')->name('createDogGroomer');
    Route::put('/admin/storeDogGroomers', 'storeDogGroomer')->name('storeDogGroomer');
    Route::get('/admin/editDogGroomer/{id}', 'editDogGroomer')->name('editDogGroomer');
    Route::put('/admin/updateDogGroomer/{id}', 'updateDogGroomer')->name('updateDogGroomer');
    Route::delete('/admin/destroyDogGroomer/{id}', 'destroyDogGroomer')->name('destroyDogGroomer');
    //todo rutas user
    Route::resource('/user/dogGroomers', DogGroomerController::class);
    Route::get('/user/dogGroomers', 'dogGroomerUser')->name('dogGroomerUser');
});
//ver como integrar los comments

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<?php

use App\Http\Controllers\AdminPlantillacController;
use App\Http\Controllers\AdopcionesController;
use App\Http\Controllers\AdopcionesVermasController;
use App\Http\Controllers\DonacionesController;
use App\Http\Controllers\FormularioAdopcionesController;
use App\Http\Controllers\FormularioDonacionesController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\welcomeController;
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

Route::get('/', HomeServicesController::class)->name('homeService');

//? RUTAS MODULO 1===============================================================================================
Route::controller(HomeServicesController::class)->group(function () {
    Route::get('/ServiceModel', 'serviceModel')->name('serviceModel');
});
//! Ruta,nombre de la funcion en el controlador, nombre dado en el html
//todo rutas Veterinarians===============================================================================================
Route::controller(VeterinarianController::class)->group(function () {
    //todo rutas admin===============================================================================================
    Route::get('/admin/Veterinarians', 'index')->name('index');
    Route::get('/admin/CreateVeterianarians', 'create')->name('create');
    Route::put('/admin/storeVeterinarias', 'store')->name('store');
    Route::get('/admin/editVeterinarians/{id}', 'edit')->name('edit');
    Route::put('/admin/updateVeterinarians/{id}', 'update')->name('update');
    Route::delete('/admin/destroyVeterinarians/{id}', 'destroy')->name('destroy');
    //todo rutas user===============================================================================================
    Route::get('/Veterinario', 'veterinarioUser')->name('Veterinario');
    Route::get('Veterinario/{id}', 'showVeterinarianUser')->name('showVeterinarian');
});
Route::controller(CommentsController::class)->group(function () {
    //todo comentarios de veterinarios===============================================================================================
    Route::get('/admin/CommentVetsAccepted/{id}', 'acceptCommentVeterinarians')->name('acceptCommentVeterinarians');
    Route::delete('/admin/CommentVetsDestroy/{id}', 'destroyVetsComment')->name('destroyVetsComment');
    //todo comentarios de housings===============================================================================================
    Route::get('/admin/CommentHousingsAccepted/{id}', 'acceptHousingsComment')->name('acceptHousingsComment');
    Route::delete('/admin/CommentHousingsDestroy/{id}', 'destroyHousingsComment')->name('destroyHousingsComment');
    //todo comentarios de groomers===============================================================================================
    Route::get('/admin/CommentDogGroomersAccepted/{id}', 'acceptDogGroomersComment')->name('acceptDogGroomersComment');
    Route::delete('/admin/CommentDogGroomersDestroy/{id}', 'destroyDogGroomersComment')->name('destroyDogGroomersComment');
});

//todo rutas de housings===============================================================================================
Route::controller(HousingsController::class)->group(function () {
    //todo rutas admin===============================================================================================
    Route::get('/admin/housingsAdmin', 'housingAdmin')->name('housingAdmin');
    Route::get('/admin/createHousing', 'createHousing')->name('createHousing');
    Route::put('/admin/storeHousings', 'storeHousing')->name('storeHousing');
    Route::get('/admin/editHousing/{id}', 'editHousing')->name('editHousing');
    Route::put('/admin/updateHousing/{id}', 'updateHousing')->name('updateHousing');
    Route::delete('/admin/destroyHousing/{id}', 'destroyHousing')->name('destroyHousing');
    //todo rutas user===============================================================================================
    Route::resource('/housings', HousingsController::class);
    Route::get('/housings', 'housingUser')->name('housingUser');
});
//----------------------------------------------------------------
// todo: rutas de dog_groomer===============================================================================================
Route::controller(DogGroomerController::class)->group(function () {
    //todo rutas admin===============================================================================================
    Route::get('/admin/DogGroomersAdmin', 'dogGroomerAdmin')->name('dogGroomerAdmin');
    Route::get('/admin/createDogGroomer', 'createDogGroomer')->name('createDogGroomer');
    Route::put('/admin/storeDogGroomers', 'storeDogGroomer')->name('storeDogGroomer');
    Route::get('/admin/editDogGroomer/{id}', 'editDogGroomer')->name('editDogGroomer');
    Route::put('/admin/updateDogGroomer/{id}', 'updateDogGroomer')->name('updateDogGroomer');
    Route::delete('/admin/destroyDogGroomer/{id}', 'destroyDogGroomer')->name('destroyDogGroomer');
    //todo rutas user===============================================================================================
    Route::resource('/dogGroomers', DogGroomerController::class);
    Route::get('/dogGroomers', 'dogGroomerUser')->name('dogGroomerUser');
});
//? FIN RUTAS MODULO 1===============================================================================================
Auth::routes();

Route::get('/welcome', welcomeController::class);
Route::resource('/Donaciones', DonacionesController::class);
Route::resource('/Adopciones', AdopcionesController::class);
Route::resource('/FormularioAdopciones', FormularioAdopcionesController::class);
Route::resource('/FormularioDonaciones', FormularioDonacionesController::class);
Route::resource('/AdopcionesVermas', AdopcionesVermasController::class);
Route::resource('/Nosotros', NosotrosController::class);
Route::resource('/Historia', HistoriaController::class);
route::resource('/AdminP','App\Http\controllers\AdminPlantillaControllerController'::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


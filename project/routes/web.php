<?php

use App\Http\Controllers\moduloServicios\DogGroomerController;
use App\Http\Controllers\HomeServicesController;
use App\Http\Controllers\moduloServicios\CommentsController;
use App\Http\Controllers\moduloServicios\HousingsController;
use App\Http\Controllers\moduloServicios\VeterinarianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
    return view('main');
});

Route::get('/adminPWFS', HomeServicesController::class)->name('homeService');

//? RUTAS MODULO 1
Route::controller(HomeServicesController::class)->group(function(){
    Route::get('/ServiceModel','serviceModel')->name('serviceModel');
});
// Ruta,nombre de la funcion en el controlador, nombre dado en el html
// todo rutas Veterinarians
Route::controller(VeterinarianController::class)->group(function(){
    //todo rutas admin
    Route::get('/admin/Veterinarians', 'index')->name('index');
    Route::get('/admin/CreateVeterianarians','create')->name('create');
    Route::put('/admin/storeVeterinarias','store')->name('store');
    Route::get('/admin/editVeterinarians/{id}','edit')->name('edit');
    Route::put('/admin/updateVeterinarians/{id}', 'update')->name('update');
    Route::delete('/admin/destroyVeterinarians/{id}', 'destroy')->name('destroy');

    //todo comentarios veterinarios
    
    //todo rutas user
    Route::get('/Veterinario','veterinarioUser')->name('Veterinario');
});
Route::controller(CommentsController::class)->group(function(){
    Route::get('/admin/CommentVetsAccepted/{id}','configComment')->name('configComment');
    Route::delete('/admin/CommentVetsDestroy/{id}','destroyVetsComment')->name('destroyVetsComment');
});


/* perfil no desarrollado */
Route::get('user/profile', [UserController::class, 'show'])->name('user.profile');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();
//todo rutas de housings
Route::controller(HousingsController::class)->group(function(){
    //todo rutas admin
    
    Route::get('/admin/housingsAdmin', 'housingAdmin')->name('housingAdmin');
    Route::get('/admin/createHousing', 'createHousing')->name('createHousing');
    Route::put('/admin/storeHousings', 'storeHousing')->name('storeHousing');
    Route::get('/admin/editHousing/{id}', 'editHousing')->name('editHousing');
    Route::put('/admin/updateHousing/{id}', 'updateHousing')->name('updateHousing');
    Route::delete('/admin/destroyHousing/{id}', 'destroyHousing')->name('destroyHousing');
    
    //todo rutas user
    Route::resource('/housings', HousingsController::class);
    Route::get('/housings', 'housingUser')->name('housingUser');
});
//----------------------------------------------------------------
// todo: rutas de dog_groomer
Route::controller(DogGroomerController::class)->group(function(){
    //todo rutas admin
    Route::get('/admin/DogGroomersAdmin', 'dogGroomerAdmin')->name('dogGroomerAdmin');
    Route::get('/admin/createDogGroomer', 'createDogGroomer')->name('createDogGroomer');
    Route::put('/admin/storeDogGroomers', 'storeDogGroomer')->name('storeDogGroomer');
    Route::get('/admin/editDogGroomer/{id}', 'editDogGroomer')->name('editDogGroomer');
    Route::put('/admin/updateDogGroomer/{id}', 'updateDogGroomer')->name('updateDogGroomer');
    Route::delete('/admin/destroyDogGroomer/{id}', 'destroyDogGroomer')->name('destroyDogGroomer');
    //todo rutas user
    Route::resource('/dogGroomers', DogGroomerController::class);
    Route::get('/dogGroomers', 'dogGroomerUser')->name('dogGroomerUser');
});
//ver como integrar los comments

//? FIN RUTAS MODULO 1

//RUTAS SERVICIOS MODULO 2

Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/registrodemanda', function () {
    return view('registrodemanda');
});
Route::get('/fundation', function () {
    return view('fundation');
});
Route::get('/adminrescate', function () {
    return view('adminrescate');
});


Route::get('/servicios', [App\Http\Controllers\ServiciosController::class, 'index'])->name('servicios');

Route::get('/registrodemanda', [App\Http\Controllers\RegistroDemandaController::class, 'index'])->name('registrodemanda');

Route::post('/guardar-denuncia', '[TuControlador]@guardarDenuncia')->name('guardar_denuncia');

Route::get('/fundation', [App\Http\Controllers\FundationController::class, 'index'])->name('fundation');

Route::get('/historialcliente', [App\Http\Controllers\HistorialclienteController::class, 'index'])->name('historialcliente');

Route::get('/adminrescate', [App\Http\Controllers\AdminRescateController::class, 'index'])->name('adminrescate');


 Auth::routes();


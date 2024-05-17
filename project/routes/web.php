<?php

use App\Http\Controllers\FundationController;
use App\Http\Controllers\Demand_animal_has_fundationController;
use App\Http\Controllers\Historial_adminController;
use App\Http\Controllers\HomeServicesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\moduloServicios\DogGroomerController;
use App\Http\Controllers\moduloServicios\CommentsController;
use App\Http\Controllers\moduloServicios\HousingsController;
use App\Http\Controllers\moduloServicios\SearchController;
use App\Http\Controllers\moduloServicios\VeterinarianController;
use App\Http\Controllers\moduloAdopcionDonacion\DonacionesController;
use App\Http\Controllers\moduloAdopcionDonacion\AdopcionesController;
use App\Http\Controllers\moduloAdopcionDonacion\PrincipalController;
use App\Http\Controllers\moduloAdopcionDonacion\HistoriaController;



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
//? RUTAS MODULO 0 ===============================================================================================
Route::get('/', function () {
    return view('main');
});

Route::get('/adminPWFS', HomeController::class)->name('login_admin')->middleware('auth');;
// Rutas para el inicio de sesión específico que dirige a moduloServicios.dashboard


/* perfil no desarrollado */
Route::get('/user/profile/{id}', [UserController::class, 'show'])->name('user.profile');
Route::get('/user/profile/edit/{id}', [UserController::class, 'edit'])->name('userEdit');
Route::put('/userUpdate/{id}',[UserController::class, 'updateUser'])->name('updateUser');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

//? FIN RUTAS MODULO 0

//? RUTAS MODULO 1===============================================================================================
Route::controller(HomeServicesController::class)->group(function () {
    Route::get('/ServiceModel', 'serviceModel')->name('serviceModel');
});
// Ruta,nombre de la funcion en el controlador, nombre dado en el html
// todo rutas Veterinarians

Route::controller(VeterinarianController::class)->group(function(){
    //todo rutas admin
    Route::get('/adminPWFS/Veterinarians', 'index')->name('index');
    Route::get('/adminPWFS/CreateVeterianarians','create')->name('create');
    Route::put('/adminPWFS/storeVeterinarias','store')->name('store');
    Route::get('/adminPWFS/editVeterinarians/{id}','edit')->name('edit');
    Route::put('/adminPWFS/updateVeterinarians/{id}', 'update')->name('update');
    Route::delete('/adminPWFS/destroyVeterinarians/{id}', 'destroy')->name('destroy');

    //todo rutas user
    Route::get('/Veterinario','veterinarioUser')->name('Veterinario');
    Route::get('/VeterinarioShow/{id}','showVeterinarianUser')->name('showVeterinarianUser');
    Route::put('/VeterinarioUpdatePuntuations/{id}','updateVeterinarianPuntuations')->name('updateVeterinarianPuntuations');
    Route::put('/VeterinarioComentario/{id}','enviarComentario')->name('enviarComentario');
    
});

//todo rutas de housings
Route::controller(HousingsController::class)->group(function(){
    //todo rutas admin
    
    Route::get('/adminPWFS/housingsAdmin', 'housingAdmin')->name('housingAdmin');
    Route::get('/adminPWFS/createHousing', 'createHousing')->name('createHousing');
    Route::put('/adminPWFS/storeHousings', 'storeHousing')->name('storeHousing');
    Route::get('/adminPWFS/editHousing/{id}', 'editHousing')->name('editHousing');
    Route::put('/adminPWFS/updateHousing/{id}', 'updateHousing')->name('updateHousing');
    Route::delete('/adminPWFS/destroyHousing/{id}', 'destroyHousing')->name('destroyHousing');
    
    //todo rutas user
    Route::get('/housing','housingUser')->name('housingUser');
    Route::get('/housingShow/{id}','showHousingUser')->name('showHousingUser');
    Route::put('/housingUpdatePuntuations/{id}','updateHousingPuntuations')->name('updateHousingPuntuations');
    Route::put('/housingComentario/{id}','enviarComentarioHousing')->name('enviarComentarioHousing');
});
//----------------------------------------------------------------
// todo: rutas de dog_groomer
Route::controller(DogGroomerController::class)->group(function(){
    //todo rutas admin
    Route::get('/adminPWFS/DogGroomersAdmin', 'dogGroomerAdmin')->name('dogGroomerAdmin');
    Route::get('/adminPWFS/createDogGroomer', 'createDogGroomer')->name('createDogGroomer');
    Route::put('/adminPWFS/storeDogGroomers', 'storeDogGroomer')->name('storeDogGroomer');
    Route::get('/adminPWFS/editDogGroomer/{id}', 'editDogGroomer')->name('editDogGroomer');
    Route::put('/adminPWFS/updateDogGroomer/{id}', 'updateDogGroomer')->name('updateDogGroomer');
    Route::delete('/adminPWFS/destroyDogGroomer/{id}', 'destroyDogGroomer')->name('destroyDogGroomer');
    //todo rutas user
    Route::resource('/dogGroomers', DogGroomerController::class);
    Route::get('/dogGroomers', 'dogGroomerUser')->name('dogGroomerUser');
    Route::get('/DogGroomerShow/{id}','showDogGroomerUser')->name('showDogGroomerUser');
    Route::put('/DogGroomerUpdatePuntuations/{id}','updateDogGroomerPuntuations')->name('updateDogGroomerPuntuations');
    Route::put('/DogGroomerComentario/{id}','enviarComentarioDogGroomer')->name('enviarComentarioDogGroomer');
});
//ver como integrar los comments


Route::controller(CommentsController::class)->group(function(){
    //todo veterinarios
    Route::get('/adminPWFS/CommentAccepted/{id}','configComment')->name('configComment');
    Route::delete('/adminPWFS/CommentDestroy/{id}','destroyVetsComment')->name('destroyVetsComment');
    //todo alojamiento
    Route::get('/adminPWFS/CommentAcceptedHousing/{id}','acceptHousingsComment')->name('acceptHousingsComment');
    Route::delete('/adminPWFS/CommentDestroyHousing/{id}','destroyHousingsComment')->name('destroyHousingsComment');
    //todo peluquerias
    Route::get('/adminPWFS/CommentAcceptedDogGroomer/{id}','acceptDogGroomersComment')->name('acceptDogGroomersComment');
    Route::delete('/adminPWFS/CommentDestroyDogGroomer/{id}','destroyDogGroomersComment')->name('destroyDogGroomersComment');
});

    //TODO BUSQUEDAs
Route::controller(SearchController::class)->group(function(){
    //TODO VETERINARIOS
    Route::post('/searchVeterinario','searchVets')->name('searchVets');
    Route::post('/searchHousings','searchHousings')->name('searchHousings');
    Route::post('/searchDogGroomers','searchDogGroomers')->name('searchDogGroomers');
});

//? FIN RUTAS MODULO 1

//? RUTAS MODULO 2 ===============================================================================================


Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/registrodemanda', function () {
    return view('registrodemanda');
});

Route::get('/servicios', [App\Http\Controllers\ServiciosController::class, 'index'])->name('servicios');

Route::get('/registrodemanda', [App\Http\Controllers\RegistroDemandaController::class, 'index'])->name('registrodemanda');

Route::get('/historialcliente', [App\Http\Controllers\HistorialClienteController::class, 'index'])->name('historialcliente');

Route::resource('fundations', FundationController::class);

Route::resource('contactarfundaciones', Demand_animal_has_fundationController::class);

Route::resource('historial_admin', Historial_adminController::class);

//? FIN RUTAS MODULO 2

//? RUTAS MODULO 3 ===============================================================================================

Route::resource('donaciones', DonacionesController::class);
Route::get('/adminPWFS/donations',  [DonacionesController::class, 'index'])->name('index');

Route::resource('adopciones', AdopcionesController::class);
Route::get('/adminPWFS/adopciones',  [AdopcionesController::class, 'index'])->name('index');

/* Route::resource('/FormularioAdopciones', FormularioAdopcionesController::class);
/*Route::resource('/FormularioDonaciones', FormularioDonacionesController::class);
Route::resource('/AdopcionesVermas', AdopcionesVermasController::class); */

Route::get('/FormularioAdopciones', function () {
    return view('moduloAdopcionDonacion.FormularioAdopciones');
}); /* esto no tiene mucho sentido con el tener la vista de un animal en show se podria solicitar ya y se registra en la pivote */

Route::get('/FormularioDonaciones', function () {
    return view('moduloAdopcionDonacion.FormularioDonaciones');
}); /* no se usara ya hay uno hecho */

Route::resource('adopcion-donaciones', PrincipalController::class);
Route::get('/donar/formulario',  [PrincipalController::class, 'indexDonations'])->name('indexDonations');
Route::get('/adoptar/formulario',  [PrincipalController::class, 'indexAdoptions'])->name('indexAdoptions');

Route::resource('historias', HistoriaController::class);

//? FIN RUTAS MODULO 3


 Auth::routes();


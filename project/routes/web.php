<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeServicesController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\moduloServicios\DogGroomerController;
use App\Http\Controllers\moduloServicios\CommentsController;
use App\Http\Controllers\moduloServicios\HousingsController;
use App\Http\Controllers\moduloServicios\VeterinarianController;
use App\Http\Controllers\AdopcionesController;
use App\Http\Controllers\AdopcionesVermasController;
use App\Http\Controllers\DonacionesController;
use App\Http\Controllers\FormularioAdopcionesController;
use App\Http\Controllers\FormularioDonacionesController;
use \App\Http\Controllers\moduloCatalogo\PostController;
use \App\Http\Controllers\moduloCatalogo\ShopController;

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

    //todo comentarios veterinarios
    
    //todo rutas user
    Route::get('/Veterinario','veterinarioUser')->name('Veterinario');
    Route::get('/VeterinarioShow/{id}','showVeterinarianUser')->name('showVeterinarianUser');
});
Route::controller(CommentsController::class)->group(function(){
    Route::get('/adminPWFS/CommentVetsAccepted/{id}','configComment')->name('configComment');
    Route::delete('/adminPWFS/CommentVetsDestroy/{id}','destroyVetsComment')->name('destroyVetsComment');
});


//Auth::routes();
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
    Route::resource('/housings', HousingsController::class);
    Route::get('/housings', 'housingUser')->name('housingUser');
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
});
//ver como integrar los comments

//? FIN RUTAS MODULO 1

//? RUTAS MODULO 2===============================================================================================

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

//? FIN RUTAS MODULO 2

//? RUTAS MODULO 3 ===============================================================================================

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


//? FIN RUTAS MODULO 3

// RUTAS MODULO 4=========================================================================================

Route::get('/store', [App\Http\Controllers\StoreController::class, 'main'])->name('store.main');
Route::get('/store/products', [App\Http\Controllers\StoreController::class, 'products'])->name('store.products');
Route::get('/store/products/{product_id}', [App\Http\Controllers\StoreController::class, 'products_details'])->name('store.products.details');
Route::get('/store/recommendations', [App\Http\Controllers\StoreController::class, 'recommendations'])->name('store.recomendations');

//rutas de postController
Route::controller(PostController::class)->group(function(){
    //todo rutas admin
    
    Route::get('/adminPWFS/postAdmin', 'postAdmin')->name('postAdmin');
    Route::get('/adminPWFS/createPost', 'createPost')->name('createPost');
    Route::put('/adminPWFS/storePost', 'storePost')->name('storePost');
    Route::get('/adminPWFS/editPost/{id}', 'editPost')->name('editPost');
    Route::put('/adminPWFS/updatePost/{id}', 'updatePost')->name('updatePost');
    Route::delete('/adminPWFS/destroyPost/{id}', 'destroyPost')->name('destroyPost');
    
    //todo rutas user
    Route::resource('/posts', PostController::class);
    Route::get('/posts', 'PostUser')->name('PostUser');
});

//rutas de shopController
Route::controller(ShopController::class)->group(function(){
    //todo rutas admin
    
    Route::get('/adminPWFS/shopAdmin', 'shopAdmin')->name('shopAdmin');
    Route::get('/adminPWFS/createShop', 'createShop')->name('createShop');
    Route::put('/adminPWFS/storeShop', 'storeShop')->name('storeShop');
    Route::get('/adminPWFS/editShop/{id}', 'editShop')->name('editShop');
    Route::put('/adminPWFS/updateShop/{id}', 'updateShop')->name('updateShop');
    Route::delete('/adminPWFS/destroyShop/{id}', 'destroyShop')->name('destroyShop');
    
    //todo rutas user
    Route::resource('/shops', ShopController::class);
    Route::get('/shops', 'ShopUser')->name('ShopUser');
});

/* Auth::routes(); */

<?php

use App\Http\Controllers\Demand_animal_has_fundationController;
use App\Http\Controllers\FundationController;
use App\Http\Controllers\Historial_adminController;
use App\Http\Controllers\HistorialClienteController;
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
use App\Http\Controllers\moduloAdopcionDonacion\AnimalsAdoptionController;
use App\Http\Controllers\moduloAdopcionDonacion\PrincipalController;
use App\Http\Controllers\moduloAdopcionDonacion\HistoriaController;
use App\Http\Controllers\moduloCatalogo\CategoryProduct;
use App\Models\moduloAdopcionDonacion\AnimalsAdoption;
use App\Http\Controllers\RegistroDemandaController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\moduloCatalogo\StoreController;
use App\Http\Controllers\moduloCatalogo\PostController;
use App\Http\Controllers\moduloCatalogo\ProductController;
use App\Http\Controllers\moduloCatalogo\ShopController;
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

Route::get('/adminPWFS', HomeController::class)->name('login_admin')->middleware('auth');

Route::get('/adminPWFS/admin', [UserController::class, 'allAdmin'])->name('allAdmin')->middleware('auth');
Route::get('/adminPWFS/admin/create', [UserController::class, 'createAdmin'])->name('createAdmin')->middleware('auth');
Route::post('/adminPWFS/admin/create', [UserController::class, 'createForm'])->name('createForm')->middleware('auth');
Route::delete('/adminPWFS/admin/{id}', [UserController::class, 'destroyAdmin'] )->name('destroyAdmin')->middleware('auth');
Route::get('/adminPWFS/user', [UserController::class, 'allUser'])->name('allUser')->middleware('auth');
// Rutas para el inicio de sesión específico que dirige a moduloServicios.dashboard


/* perfil no desarrollado */
Route::get('/user/profile/{id}', [UserController::class, 'show'])->name('user.profile')->middleware('auth');
Route::get('/user/profile/edit/{id}', [UserController::class, 'edit'])->name('userEdit')->middleware('auth');
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
    Route::get('/adminPWFS/Veterinarians', 'indexVeterinarians')->name('indexVeterinarians')->middleware('auth');
    Route::get('/adminPWFS/CreateVeterianarians','create')->name('create')->middleware('auth');
    Route::put('/adminPWFS/storeVeterinarias','store')->name('store');
    Route::get('/adminPWFS/editVeterinarians/{id}','edit')->name('edit')->middleware('auth');
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
    
    Route::get('/adminPWFS/housingsAdmin', 'housingAdmin')->name('housingAdmin')->middleware('auth');
    Route::get('/adminPWFS/createHousing', 'createHousing')->name('createHousing')->middleware('auth');
    Route::put('/adminPWFS/storeHousings', 'storeHousing')->name('storeHousing');
    Route::get('/adminPWFS/editHousing/{id}', 'editHousing')->name('editHousing')->middleware('auth');
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
    Route::get('/adminPWFS/DogGroomersAdmin', 'dogGroomerAdmin')->name('dogGroomerAdmin')->middleware('auth');
    Route::get('/adminPWFS/createDogGroomer', 'createDogGroomer')->name('createDogGroomer')->middleware('auth');
    Route::put('/adminPWFS/storeDogGroomers', 'storeDogGroomer')->name('storeDogGroomer');
    Route::get('/adminPWFS/editDogGroomer/{id}', 'editDogGroomer')->name('editDogGroomer')->middleware('auth');
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
    Route::get('/adminPWFS/CommentAccepted/{id}','configComment')->name('configComment')->middleware('auth');
    Route::delete('/adminPWFS/CommentDestroy/{id}','destroyVetsComment')->name('destroyVetsComment')->middleware('auth');
    //todo alojamiento
    Route::get('/adminPWFS/CommentAcceptedHousing/{id}','acceptHousingsComment')->name('acceptHousingsComment')->middleware('auth');
    Route::delete('/adminPWFS/CommentDestroyHousing/{id}','destroyHousingsComment')->name('destroyHousingsComment')->middleware('auth');
    //todo peluquerias
    Route::get('/adminPWFS/CommentAcceptedDogGroomer/{id}','acceptDogGroomersComment')->name('acceptDogGroomersComment')->middleware('auth');
    Route::delete('/adminPWFS/CommentDestroyDogGroomer/{id}','destroyDogGroomersComment')->name('destroyDogGroomersComment')->middleware('auth');
});

    //TODO BUSQUEDAs
Route::controller(SearchController::class)->group(function(){
    //TODO VETERINARIOS
    Route::post('/searchVeterinario','searchVets')->name('searchVets');
    Route::post('/searchHousings','searchHousings')->name('searchHousings');
    Route::post('/searchDogGroomers','searchDogGroomers')->name('searchDogGroomers');
});

//? FIN RUTAS MODULO 1

//? RUTAS MODULO 2
Route::get('/servicios', [App\Http\Controllers\ServiciosController::class, 'index'])->name('servicios');

Route::resource('registrodemanda', RegistroDemandaController::class);

Route::resource('historial_user', HistorialClienteController::class);

/* admin */
Route::resource('/adminPWFS/fundations', FundationController::class)->middleware('auth');

Route::resource('/adminPWFS/contactarfundaciones', Demand_animal_has_fundationController::class)->middleware('auth');

Route::resource('/adminPWFS/historial_admin', Historial_adminController::class)->middleware('auth');

//? FIN RUTAS MODULO 2


//? RUTAS MODULO 3

Route::resource('donaciones', DonacionesController::class);
Route::get('/adminPWFS/donations',  [DonacionesController::class, 'index'])->name('index')->middleware('auth');

Route::resource('adopciones', AdopcionesController::class);
Route::get('/adminPWFS/adopciones',  [AdopcionesController::class, 'index'])->name('index')->middleware('auth');

/* Route::resource('/FormularioAdopciones', FormularioAdopcionesController::class);
/*Route::resource('/FormularioDonaciones', FormularioDonacionesController::class);
Route::resource('/AdopcionesVermas', AdopcionesVermasController::class); */

Route::resource('adopcion-donaciones', PrincipalController::class);
Route::get('/donar/formulario',  [PrincipalController::class, 'indexDonations'])->name('indexDonations');
Route::get('/adoptar/formulario',  [PrincipalController::class, 'indexAdoptions'])->name('indexAdoptions');
Route::get('/showAdoptions/{id}',[PrincipalController::class, 'showAdoptions'])->name('showAdoptions');
Route::put('/solicitarAdopcion/{id}', [PrincipalController::class, 'solicitarAdopcion'])->name('solicitarAdopcion');

Route::get('/adminPWFS/adopcionDestroy/{id}',[AnimalsAdoptionController::class, 'destroy'])->name('destroyAnimals')->middleware('auth');
Route::put('/adminPWFS/ConfirmarAdopcion/{id}',[AnimalsAdoptionController::class,'confirmarAdopcion'])->name('confirmarAdopcion')->middleware('auth');
Route::put('/adminPWFS/denegarAdopcion/{id}',[AnimalsAdoptionController::class,'denegarAdopcion'])->name('denegarAdopcion')->middleware('auth');


//? FIN RUTAS MODULO 3

//? RUTAS MODULO 4=========================================================================================

Route::controller(StoreController::class)->group(function(){
    Route::get('/store', 'index')->name('index');
});

//rutas de postController
// Route::controller(PostController::class)->group(function(){
//     //todo rutas admin
    
//     Route::get('/adminPWFS/postAdmin', 'postAdmin')->name('postAdmin');
//     Route::get('/adminPWFS/createPost', 'createPost')->name('createPost');
//     Route::put('/adminPWFS/storePost', 'storePost')->name('storePost');
//     Route::get('/adminPWFS/editPost/{id}', 'editPost')->name('editPost');
//     Route::put('/adminPWFS/updatePost/{id}', 'updatePost')->name('updatePost');
//     Route::delete('/adminPWFS/destroyPost/{id}', 'destroyPost')->name('destroyPost');
    
//     //todo rutas user
//     Route::resource('/posts', PostController::class);
//     Route::get('/posts', 'PostUser')->name('PostUser');
// });

//rutas de ProductController
Route::controller(ProductController::class)->group(function(){
    //todo rutas admin
    
    Route::get('/adminPWFS/productAdmin', 'productAdmin')->name('productAdmin')->middleware('auth');
    Route::get('/adminPWFS/createProduct', 'createProduct')->name('createProduct')->middleware('auth');
    Route::put('/adminPWFS/storeProduct', 'storeProduct')->name('storeProduct');
    Route::get('/adminPWFS/editProduct/{id}', 'editProduct')->name('editProduct')->middleware('auth');
    Route::put('/adminPWFS/updateProduct/{id}', 'updateProduct')->name('updateProduct');
    Route::delete('/adminPWFS/destroyProduct/{id}', 'destroyProduct')->name('destroyProduct');
    
    //todo rutas user
    Route::resource('/products', ProductController::class);
    Route::get('/products', 'ProductUser')->name('ProductUser');
    Route::get('/Product/{id}', 'showproductUser')->name('showproductUser');
    Route::put('/ProductUpdatePuntuations/{id}','updateProductPuntuations')->name('updateProductPuntuations');

    //todo rutas de categoria de productos
    Route::get ('/productCatagoryDog','categoryDog')->name('categoryDog');
    Route::get ('/productCatagoryCat','categoryCat')->name('categoryCat');
    Route::get ('/productCatagoryRodent','categoryRodent')->name('categoryRodent');
    Route::get ('/productCatagoryBirds','categoryBirds')->name('categoryBirds');
    Route::get ('/productCatagoryFish','categoryFish')->name('categoryFish');
    Route::get ('/productCatagoryReptile','categoryReptile')->name('categoryReptile');
});


//rutas de shopController
Route::controller(ShopController::class)->group(function() {
    //todo rutas admin
    
    Route::get('/adminPWFS/shopAdmin', 'shopAdmin')->name('shopAdmin')->middleware('auth');
    Route::get('/adminPWFS/createShop', 'createShop')->name('createShop')->middleware('auth');
    Route::put('/adminPWFS/storeShop', 'storeShop')->name('storeShop');
    Route::get('/adminPWFS/editShop/{id}', 'editShop')->name('editShop')->middleware('auth');
    Route::put('/adminPWFS/updateShop/{id}', 'updateShop')->name('updateShop');
    Route::delete('/adminPWFS/destroyShop/{id}', 'destroyShop')->name('destroyShop');

        //todo rutas user
        // Route::resource('/shops', ShopController::class);
        Route::get('/shops', 'ShopUser')->name('ShopUser');
        Route::get('/Shop/{id}', 'showshopUser')->name('showshopUser');
        Route::put('/ShopUpdatePuntuations/{id}','updateShopPuntuations')->name('updateShopPuntuations');

});

//todo rutas categorias produt
Route::resource('categoryProducts', CategoryProduct::class)->middleware('auth');
Auth::routes();


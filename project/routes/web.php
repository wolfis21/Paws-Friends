<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();


//? FIN RUTAS MODULO 3

//? RUTAS MODULO 4=========================================================================================

Route::get('/store', [App\Http\Controllers\moduloCatalogo\StoreController::class, 'main'])->name('store.main');
Route::get('/store/products', [App\Http\Controllers\moduloCatalogo\StoreController::class, 'products'])->name('store.products');
Route::get('/store/products/{product_id}', [App\Http\Controllers\moduloCatalogo\StoreController::class, 'products_details'])->name('store.products.details');
Route::get('/store/recommendations', [App\Http\Controllers\moduloCatalogo\StoreController::class, 'recommendations'])->name('store.recomendations');

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

//rutas de ProductController
Route::controller(ProductController::class)->group(function(){
    //todo rutas admin
    
    Route::get('/adminPWFS/productAdmin', 'productAdmin')->name('productAdmin');
    Route::get('/adminPWFS/createProduct', 'createProduct')->name('createProduct');
    Route::put('/adminPWFS/storeProduct', 'storeProduct')->name('storeProduct');
    Route::get('/adminPWFS/showProduct/{id}', 'showProduct')->name('showProduct');
    Route::get('/adminPWFS/editProduct/{id}', 'editProduct')->name('editProduct');
    Route::put('/adminPWFS/updateProduct/{id}', 'updateProduct')->name('updateProduct');
    Route::delete('/adminPWFS/destroyProduct/{id}', 'destroyProduct')->name('destroyProduct');
    
    //todo rutas user
    Route::resource('/products', ProductController::class);
    Route::get('/products', 'ProductUser')->name('ProductUser');
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

});

//rutas de Categories_productController
Route::controller(Categories_productController::class)->group(function(){
    //todo rutas admin
    
    Route::get('/adminPWFS/categoriesProductAdmin', 'categoriesProductAdmin')->name('categoriesProductAdmin');
    Route::get('/adminPWFS/createCategoryProduct', 'createCategoryProduct')->name('createCategoryProduct');
    Route::put('/adminPWFS/storeCategoryProduct', 'storeCategoryProduct')->name('storeCategoryProduct');
    Route::get('/adminPWFS/editCategoryProduct/{id}', 'editCategoryProduct')->name('editCategoryProduct');
    Route::put('/adminPWFS/updateCategoryProduct/{id}', 'updateCategoryProduct')->name('updateCategoryProduct');
    Route::delete('/adminPWFS/destroyCategoryProduct/{id}', 'destroyCategoryProduct')->name('destroyCategoryProduct');

});


/* Auth::routes(); */

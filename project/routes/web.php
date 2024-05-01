<?php

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
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
});

/* perfil no desarrollado */
Route::get('user/profile', [UserController::class, 'show'])->name('user.profile');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//RUTAS SERVICIOS MODULO 2

Route::get('/servicios', function () {
    return "Si sirve sta broma";//view('servicios');
});
Route::get('/registrodemanda', function () {
    return view('registrodemanda');
});
Route::get('/fundation', function () {
    return view('fundation');
});
Route::get('/historialcliente', function () {
    return view('historialcliente');
});


Route::get('/servicios', [App\Http\Controllers\ServiciosController::class, 'index'])->name('servicios');

Route::get('/registrodemanda', [App\Http\Controllers\RegistroDemandaController::class, 'index'])->name('registrodemanda');

Route::post('/guardar-denuncia', '[TuControlador]@guardarDenuncia')->name('guardar_denuncia');

Route::get('/fundation', [App\Http\Controllers\FundationController::class, 'index'])->name('fundation');

Route::get('/historialcliente', [App\Http\Controllers\HistorialclienteController::class, 'index'])->name('historialcliente');


Auth::routes();
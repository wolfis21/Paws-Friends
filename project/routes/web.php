<?php

use Illuminate\Support\Facades\Route;
//CONTROLADOR 
use App\Http\Controllers\DemandAnimalController;


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

//RUTAS SERVICIOS MODULO 2

Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('registrodemanda', function () {
    return view('registrodemanda');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/servicios', [App\Http\Controllers\ServiciosController::class, 'index'])->name('servicios');
Route::get('/registrodemanda', [App\Http\Controllers\RegistroDemandaController::class, 'index'])->name('registrodemanda');

Route::post('/guardar-denuncia', '[TuControlador]@guardarDenuncia')->name('guardar_denuncia');



//colocar rutas arriba de esto para notener problemas 
Auth::routes();
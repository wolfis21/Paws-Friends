<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeServicesController extends Controller
{
    public function __invoke(){
        //todo 0 = acceder a la vista del usuario, 1 = acceder a vista administrador
        $rol = 0;
        if ($rol === 1) {
            return view('layouts.dashboard');
        }
        return view('homeServices');
    }

    public function homeService(){
        return view('homeServices');
    }
    
    //todo RUTA A MODULO 1
    public function serviceModel(){
        return view('moduloServicios.serviceModel');
    }
}

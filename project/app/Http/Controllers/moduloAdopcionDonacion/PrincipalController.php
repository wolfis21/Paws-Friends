<?php

namespace App\Http\Controllers\moduloAdopcionDonacion;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    { /* mostrar aca las historias */
        return view('moduloAdopcionDonacion.principal');
    }

    public function indexDonations(){
        return view('moduloAdopcionDonacion.donations.user.Donaciones');
    }

    public function indexAdoptions(){
        return view('moduloAdopcionDonacion.adopcion.user.Adopciones');
    }

}

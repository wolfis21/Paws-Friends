<?php

namespace App\Http\Controllers\moduloAdopcionDonacion;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdopcionesController extends Controller
{
    public function index()
    {
      return view('moduloAdopcionDonacion.Adopciones');
    }
}

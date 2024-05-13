<?php

namespace App\Http\Controllers\moduloAdopcionDonacion;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdopcionesVermasController extends Controller
{
    public function index()
    {
      return view('moduloAdopcionDonacion.AdopcionesVermas');
    }
}

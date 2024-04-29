<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdopcionesController extends Controller
{
    public function index()
    {
      return view('Adopciones');
    }
}

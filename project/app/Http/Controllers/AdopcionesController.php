<?php

namespace App\Http\Controllers;

use App\Models\animals_adoption;
use Illuminate\Http\Request;

class AdopcionesController extends Controller
{
    public function index()
    {
      $adopciones= animals_adoption::all();
      return view('Adopciones')->with('adopciones',$adopciones);
    }
}

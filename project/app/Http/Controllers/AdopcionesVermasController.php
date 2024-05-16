<?php

namespace App\Http\Controllers;
use App\Models\animals_adoption;
use Illuminate\Http\Request;

class AdopcionesVermasController extends Controller
{
    public function index()
    {

      $adopciones= animals_adoption::all();
      return view('AdopcionesVermas')-> with('adopciones',$adopciones);;
    }


}

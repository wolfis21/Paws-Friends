<?php

namespace App\Http\Controllers;

use App\Models\FormularioAdopciones;
use Illuminate\Http\Request;


class FormularioAdopcionesController extends Controller
{
    public function index()
    {
      return view('FormularioAdopciones');
    }

    public function store(Request $request)
    {
      $datosFormularioAdopciones=request()->except('_token');
      FormularioAdopciones::insert($datosFormularioAdopciones);
      if ( $request->hasFile('photo_animal')) {
        $datosFormularioAdopciones['photo_animal']=$request->file('photo_animal')->store('uploads','public');
        return redirect('FormularioAdopciones');
      }
      return response() ->json($datosFormularioAdopciones);
      
    }


}

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
      if ( $request->hasFile('dni')) {
        $datosFormularioAdopciones['dni']=$request->file('dni')->store('uploads','public');
        return redirect('FormularioAdopciones');
      }
      return response() ->json($datosFormularioAdopciones);
      
    }


}

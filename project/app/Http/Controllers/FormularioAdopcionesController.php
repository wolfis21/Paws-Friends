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
      return redirect('FormularioAdopciones')->with('mensaje','Formulario Adopciones creado con exito');
      if ( $request->hasFile('dni')) {
        $file = $request->file('dni');
        $name = time().$file->getClientOriginalName();
        $file->move(public_path().'/images/', $name);
        $datosFormularioAdopciones['dni']=$name;
        $datosFormularioAdopciones['dni']=$request->file('dni')->store('uploads','public');
      }
      return response() ->json($datosFormularioAdopciones);
      
    }


}

<?php

namespace App\Http\Controllers\moduloAdopcionDonacion;
use App\Http\Controllers\Controller;

use App\Models\moduloAdopcionDonacion\FormularioAdopciones;
use Illuminate\Http\Request;


class FormularioAdopcionesController extends Controller
{
    public function index()
    {
      return view('moduloAdopcionDonacion.FormularioAdopciones');
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

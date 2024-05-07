<?php

namespace App\Http\Controllers;

use App\Models\AdminPlantillaController;
use Illuminate\Http\Request;
use App\Models\FormularioAdopciones;

class AdminPlantillaControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $FormularioAdopciones=FormularioAdopciones:: all();
      return view('Admin.index')->with('FormularioAdopciones',$FormularioAdopciones);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $FormularioAdopciones = new FormularioAdopciones();

      $FormularioAdopciones->ID = $request->get('ID');
      $FormularioAdopciones->nombre = $request->get('nombre');
      $FormularioAdopciones->apellido = $request->get('apellido');
      $FormularioAdopciones->Dni = $request->get('Dni');
      $FormularioAdopciones->telefono = $request->get('telefono');

      $FormularioAdopciones->save();

      return redirect('/AdminP');
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminPlantillaController $adminPlantillaController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    { 
        $FormularioAdopcion=FormularioAdopciones::find($id);
        return view('Admin.edit')->with('FormularioAdopcion',$FormularioAdopcion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      $FormularioAdopcion = FormularioAdopciones::find($id);

      
      $FormularioAdopcion->nombre = $request->get('nombre');
      $FormularioAdopcion->apellido = $request->get('apellido');
      $FormularioAdopcion->Dni = $request->get('Dni');
      $FormularioAdopcion->telefono = $request->get('telefono');

      $FormularioAdopcion->save();

      return redirect('/AdminP');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $FormularioAdopcion = FormularioAdopciones::find($id);
      $FormularioAdopcion->delete();
      return redirect('/AdminP');

    }
}

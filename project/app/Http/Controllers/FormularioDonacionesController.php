<?php

namespace App\Http\Controllers;

use App\Models\FormularioDonaciones;
use Illuminate\Http\Request;

class FormularioDonacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('FormularioDonaciones');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosFormularioDonaciones=request()->except('_token');
        FormularioDonaciones::insert($datosFormularioDonaciones);
        if ($request ->hasFile('fotos-donacion')){
          $datosFormularioDonaciones['fotos-donacion']=$request->file('fotos-donacion')->store('uploads','public');
        return redirect('FormularioDonaciones');
        }
        return response() ->json($datosFormularioDonaciones);
    }

    /**
     * Display the specified resource.
     */
    public function show(FormularioDonaciones $formularioDonaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormularioDonaciones $formularioDonaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormularioDonaciones $formularioDonaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormularioDonaciones $formularioDonaciones)
    {
        //
    }
}

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
        return redirect('FormularioDonaciones');
        if ($request ->hasFile('fotos-donacion')){
          $file = $request->file('fotos-donacion');
          $name = time().$file->getClientOriginalName();
          $file->move(public_path().'/images', $name);
          $datosFormularioDonaciones['fotos-donacion']=$request->file('fotos-donacion')->store('uploads','public');
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

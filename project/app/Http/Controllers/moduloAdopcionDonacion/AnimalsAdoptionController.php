<?php

namespace App\Http\Controllers\moduloAdopcionDonacion;
use App\Http\Controllers\Controller;

use App\Models\moduloAdopcionDonacion\animals_adoption;
use App\Models\moduloAdopcionDonacion\AnimalsAdoption;
use Illuminate\Http\Request;

class AnimalsAdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $animals_adoption=AnimalsAdoption:: all();
      return view('moduloAdopcionDonacion.animals_adoption.index')->with('animals_adoption',$animals_adoption);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('moduloAdopcionDonacion.animals_adoption.create');
    }

    /**
     * Store a newly created resource in storage.
     */
     
    public function store(Request $request)
    {
      $animals_adoption = new AnimalsAdoption();

      $animalAdoption = $request->all();
      $animals_adoption->status = 'Sin solicitud / Sin adoptar';
      $animals_adoption->users->id = '';
      $animals_adoption->save($animalAdoption);

      return redirect('/AdminPP/adopciones')->with('info','Se edito la adopcion correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      $animals_adoptions=AnimalsAdoption::find($id);
      return view('moduloAdopcionDonacion.animals_adoption.edit')->with('animals_adoptions',$animals_adoptions);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      $animals_adoption = AnimalsAdoption::find($id);
      // if ($image = $request->file('photo_animal')) {
      //   $path = 'storage/moduloAdopcion/images/';
      //   $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
      //   $image->move($path, $imageName);
      //   $animals_adoption['photo_animal'] = "$imageName";
      // }
      $animals_adoption->update($request->all());
      return redirect('/AdminPP/adopciones');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $animals_adoption = AnimalsAdoption::find($id);
      $animals_adoption->delete();
      return redirect('/AdminPP/adopciones');

    }
    
    public function confirmarAdopcion($id){
      $animals_adoption = AnimalsAdoption::find($id);
      $animals_adoption->status = 'Aceptada';
      $animals_adoption->update();
      return redirect('/adminPWFS/adopciones')->with('success','Se confirmo la adopcion correctamente');
    }
    public function denegarAdopcion($id){
      $animals_adoption = AnimalsAdoption::find($id);
      $animals_adoption->status = 'Rechazada';
      $animals_adoption->update();
      return redirect('/adminPWFS/adopciones')->with('destroy','Se confirmo la adopcion correctamente');
    }

}

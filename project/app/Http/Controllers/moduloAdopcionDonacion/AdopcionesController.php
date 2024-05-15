<?php

namespace App\Http\Controllers\moduloAdopcionDonacion;
use App\Http\Controllers\Controller;
use App\Models\moduloAdopcionDonacion\AnimalsAdoption;

use Illuminate\Http\Request;

class AdopcionesController extends Controller
{
    public function index()
    {
      $adopcion= AnimalsAdoption::all();

      return view('moduloAdopcionDonacion.adopcion.admin.index')
      ->with('adopcion', $adopcion);
    }

    public function create()
    {
      return view('moduloAdopcionDonacion.adopcion.admin.create');
    }

    public function store(Request $request)
    {
        $adopcion = $request->all();

        if ($image = $request->file('photo_animal')) {
            $path = 'storage/moduloAdopcion/images/';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $adopcion['photo_animal'] = "$imageName";
        }

        AnimalsAdoption::create($adopcion);

        return redirect('/adminPWFS/adopciones');

    }


    public function show(AnimalsAdoption $animals_adoption)
    {
        //
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
/*     public function update(Request $request, $id) 
    {
      $animals_adoption = AnimalsAdoption::find($id);
      
      $animals_adoption->name= $request->get('name');
      $animals_adoption->species = $request->get('species');
      $animals_adoption->animal_race = $request->get('animal_race');
      $animals_adoption->sex_animal = $request->get('sex_animal');
      $animals_adoption->age_animal = $request->get('age_animal');
      $animals_adoption->descriptions_animals = $request->get('descriptions_animals');
      $animals_adoption->photo_animal = $request->get('photo_animal');
      $animals_adoption->location_addres = $request->get('location_address');

      $animals_adoption->save();

      return redirect('/AdminPP');
    } */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $animals_adoption = AnimalsAdoption::find($id);
      $animals_adoption->delete();
      return redirect('/adminPWFS/adopciones');

    }
}

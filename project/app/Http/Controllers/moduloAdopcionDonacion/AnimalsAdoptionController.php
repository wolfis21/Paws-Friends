<?php

namespace App\Http\Controllers\moduloAdopcionDonacion;
use App\Http\Controllers\Controller;

use App\Models\moduloAdopcionDonacion\animals_adoption;
use Illuminate\Http\Request;

class AnimalsAdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $animals_adoption=animals_adoption:: all();
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
      $animals_adoption = new animals_adoption();

      $animals_adoption->id = $request->get('id');
      $animals_adoption->name= $request->get('name');
      $animals_adoption->species = $request->get('species');
      $animals_adoption->animal_race = $request->get('animal_race');
      $animals_adoption->sex_animal = $request->get('sex_animal');
      $animals_adoption->age_animal = $request->get('age_animal');
      $animals_adoption->descriptions_animals = $request->get('descriptions_animals');
      $animals_adoption->photo_animal = $request->get('photo_animal');
      $animals_adoption->location_addres = $request->get('location_addres');

      $animals_adoption->save();

      return redirect('/AdminPP');
    }

    /**
     * Display the specified resource.
     */
    public function show(animals_adoption $animals_adoption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      $animals_adoptions=animals_adoption::find($id);
      return view('moduloAdopcionDonacion.animals_adoption.edit')->with('animals_adoptions',$animals_adoptions);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      $animals_adoption = animals_adoption::find($id);

      
      
      $animals_adoption->name= $request->get('name');
      $animals_adoption->species = $request->get('species');
      $animals_adoption->animal_race = $request->get('animal_race');
      $animals_adoption->sex_animal = $request->get('sex_animal');
      $animals_adoption->age_animal = $request->get('age_animal');
      $animals_adoption->descriptions_animals = $request->get('descriptions_animals');
      $animals_adoption->photo_animal = $request->get('photo_animal');
      $animals_adoption->location_addres = $request->get('location_addres');

      $animals_adoption->save();

      return redirect('/AdminPP');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $animals_adoption = animals_adoption::find($id);
      $animals_adoption->delete();
      return redirect('/AdminPP');

    }
}

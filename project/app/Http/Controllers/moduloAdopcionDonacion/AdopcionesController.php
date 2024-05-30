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
      $request->validate([
        'name' => 'required|string|min:3',
        'species' => 'required|string',
        'animal_race' => 'required|string',
        'sex_animal' => 'required|string',
        'age_animal' => 'required|integer',
        'description_animals' => 'required|string',
        'photo_animal' =>'required',
        'location_address' =>'required|string',
        'status' => 'required',
        'users_id' => 'required',
    ]);

      $adopcion = $request->all();

        if ($image = $request->file('photo_animal')) {
            $path = 'storage/moduloAdopcion/images/';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $adopcion['photo_animal'] = "$imageName";
        }
        AnimalsAdoption::create($adopcion);

        return redirect('/adminPWFS/adopciones')->with('success','Se creo la adopcion correctamente');

    }
    public function edit($id)
    {
      $animals_adoptions=AnimalsAdoption::find($id); /* desarrollar mas */
      return view('moduloAdopcionDonacion.animals_adoption.edit')->with('animals_adoptions',$animals_adoptions)
      ->with('info','Se edito la adopcion correctamente');
    }

    public function destroy($id)
    {
      $animals_adoption = AnimalsAdoption::find($id);
      $animals_adoption->delete();
      return redirect('/adminPWFS/adopciones')->with('destroy','Se elimino la adopcion correctamente');

    }


}

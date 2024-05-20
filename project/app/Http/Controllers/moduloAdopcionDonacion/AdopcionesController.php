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
    public function edit($id)
    {
      $animals_adoptions=AnimalsAdoption::find($id); /* desarrollar mas */
      return view('moduloAdopcionDonacion.animals_adoption.edit')->with('animals_adoptions',$animals_adoptions);
    }

    public function destroy($id)
    {
      $animals_adoption = AnimalsAdoption::find($id);
      $animals_adoption->delete();
      return redirect('/adminPWFS/adopciones');

    }


}

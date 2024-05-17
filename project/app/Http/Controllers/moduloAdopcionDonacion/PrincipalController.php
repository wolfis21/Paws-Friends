<?php

namespace App\Http\Controllers\moduloAdopcionDonacion;
use App\Http\Controllers\Controller;
use App\Models\moduloAdopcionDonacion\AnimalsAdoption;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    { /* mostrar aca las historias */
        return view('moduloAdopcionDonacion.principal');
    }

    public function indexDonations(){


        return view('moduloAdopcionDonacion.donations.user.Donaciones');
    }

    
    public function indexAdoptions(){
        $adopciones = AnimalsAdoption::all(); // Ejemplo, reemplaza esto con tus datos
        return view('moduloAdopcionDonacion.adopcion.user.Adopciones', compact('adopciones'));
    }
    
    public function showAdoptions($id){
        $adopcion = AnimalsAdoption::find($id);
        return view('moduloAdopcionDonacion.adopcion.user.show', compact('adopcion'));
    }
}

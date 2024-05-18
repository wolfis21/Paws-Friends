<?php

namespace App\Http\Controllers\moduloAdopcionDonacion;
use App\Http\Controllers\Controller;
use App\Models\moduloAdopcionDonacion\AnimalsAdoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function solicitarAdopcion($id){
        $adopcion = AnimalsAdoption::find($id);
        $adopcion->status = 'En proceso';
        $adopcion->user_id = Auth::user()->id;
        $adopcion->update();
        return redirect()->route('indexAdoptions');
    }
}

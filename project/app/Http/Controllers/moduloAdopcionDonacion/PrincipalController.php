<?php

namespace App\Http\Controllers\moduloAdopcionDonacion;

use App\Http\Controllers\Controller;
use App\Models\moduloAdopcionDonacion\AnimalsAdoption;
use App\Models\moduloAdopcionDonacion\Donations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrincipalController extends Controller
{
    public function index()
    { /* mostrar aca las historias */
        return view('moduloAdopcionDonacion.principal');
    }

    public function indexDonations()
    {
        $donations = Donations::latest()->take(4)->get();
        return view('moduloAdopcionDonacion.donations.user.Donaciones', ['donations' => $donations]);
    }


    public function indexAdoptions()
    {
        $adopciones = AnimalsAdoption::all();
        return view('moduloAdopcionDonacion.adopcion.user.Adopciones', compact('adopciones'))->with('success','Solicitud de donacion realizada correctamente');
    }

    public function showAdoptions($id)
    {
        $adopcion = AnimalsAdoption::find($id);
        if (Auth::check()) {

            return view('moduloAdopcionDonacion.adopcion.user.show', compact('adopcion'));
        } else {
            return redirect()->route('login');
        }
    }

    public function solicitarAdopcion($id)
    {
        $adopcion = AnimalsAdoption::find($id);
        $adopcion->status = 'En proceso';
        $adopcion->users_id = Auth::user()->id;
        $adopcion->update();
        return redirect()->route('indexAdoptions');
    }
}

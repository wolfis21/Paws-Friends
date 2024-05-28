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
        if(Auth::check()){
            return view('moduloAdopcionDonacion.donations.user.Donaciones', ['donations' => $donations]);
        }else{
            return redirect()->route('login')->withErrors(['login' => 'Tienes que iniciar sesion para estar aca.']);
        }
    }


    public function indexAdoptions()
    {
        $adopciones = AnimalsAdoption::all();
        return view('moduloAdopcionDonacion.adopcion.user.Adopciones', compact('adopciones'));
    }

    public function showAdoptions($id)
    {
        $adopcion = AnimalsAdoption::find($id);
        if (Auth::check()) {

            return view('moduloAdopcionDonacion.adopcion.user.show', compact('adopcion'));
        } else {
            return redirect()->route('login')->withErrors(['login' => 'Por favor necesita iniciar sesion para acceder a este apartado.']);
        }
    }

    public function solicitarAdopcion($id)
    {
        $adopcion = AnimalsAdoption::find($id);
        $adopcion->status = 'En proceso';
        $adopcion->users_id = Auth::user()->id;
        $adopcion->update();
        return redirect()->route('indexAdoptions')->with('success','Su solicitud de adopciones fue enviada exitosamente');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Demands_animalss;
use App\Models\Demand_animal_has_fundation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistorialClienteController extends Controller
{
    public function index()
    {
     if(Auth::check()){
        $userId =  Auth::user()->id; 

        $demand = Demands_animalss::where('users_id', $userId)->get();

        $completada = Demand_animal_has_fundation::with(['demands_animalss'])
                            ->whereHas('demands_animalss', function ($query) use ($userId) {
                                $query->where('users_id', $userId);
                            })
                            ->where('statusfund_id', 3)
                            ->get();

        
        return view('moduloRescate.historial_user.index')->with('demand', $demand)->with('completada', $completada);
    } else {
        return redirect()->route('login')->withErrors(['login' => 'Tienes que iniciar sesion para estar aca.']);
    }

    }

    
}

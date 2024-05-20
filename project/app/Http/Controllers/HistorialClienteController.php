<?php

namespace App\Http\Controllers;
use App\Models\Demands_animalss;
use App\Models\Demand_animal_has_fundation;

use Illuminate\Http\Request;

class HistorialClienteController extends Controller
{
    public function index()
    {
        $userId = 1; // Reemplaza con el ID del usuario que deseas mostrar

        $demand = Demands_animalss::where('users_id', $userId)->get();

        $completada = Demand_animal_has_fundation::with(['demands_animalss'])
                            ->whereHas('demands_animalss', function ($query) use ($userId) {
                                $query->where('users_id', $userId);
                            })
                            ->where('statusfund_id', 3)
                            ->get();

        
        return view('moduloRescate.historial_user.index')->with('demand', $demand)->with('completada', $completada);

    }

    
}

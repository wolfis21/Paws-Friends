<?php

namespace App\Http\Controllers\moduloServicios;

use App\Http\Controllers\Controller;
use App\Models\moduloServicios\Veterinarian;
use Illuminate\Http\Request;
use DB;
use Response;

class SearchController extends Controller
{
    // public function searchVets(Request $request){
    // $searchTerm = $request->input('search');
    // $results = Veterinarian::where('name', 'like', "%{$searchTerm}%")
    //                   ->orWhere('specialist_animals', 'like', "%{$searchTerm}%")
    //                   ->get();

    // return response()->json($results);
    // }

    //TODO FUNCIONA
    public function searchVets(Request $request)
    {
        $data = ["success"=>false];
        if ($request->ajax()) {
            $veterinariosLista = Veterinarian::where('name', 'like', "%{$request->searchTerm}%")
                              ->orWhere('specialist_animals', 'like', "%{$request->searchTerm}%")
                              ->get(['id','name','address','phone','specialist_animals','img_ref','puntuation']);
            $data = [
                'success'=>true,
                'veterinariosLista' => $veterinariosLista
        ];
        }
        return response()->json($data,200);
    }
}

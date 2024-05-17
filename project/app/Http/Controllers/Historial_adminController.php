<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demands_animalss;
use App\Models\Demand_animal_has_fundation;
use App\Models\Motivo;
use App\Models\Urgencia;
use App\Models\User;
use App\Models\Types_status;


class Historial_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demand = Demands_animalss::all();
        $completada = Demand_animal_has_fundation::with(['demands_animalss'])->where('statusfund_id',3)->get();
        
        return view('moduloRescate.historial_admin.index')->with('demand', $demand)->with('completada', $completada);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $demand = Demands_animalss::all();
        $motivos = Motivo::all();
        $urgencias = Urgencia::all();
        $users = User::all();

        return view('moduloRescate.historial_admin.create')->with('demand', $demand)
        ->with('motivos', $motivos)->with('urgencias', $urgencias)->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'users_id' => 'required',
            'description_case' => 'required|string|min:3',
            'adress_animals' => 'required|string|min:3',
            'photo_ref' => 'required|string|min:1',
            'motivo_id' => 'required',
            'urgencia_id' => 'required',
        ]);

        Demands_animalss::create($request->all());

        return redirect()->route('historial_admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $demand = Demands_animalss::find($id);
        $motivos = Motivo::all();
        $urgencias = Urgencia::all();
        $users = User::all();
        $type = Types_status::all();
        return view('moduloRescate.historial_admin.edit')->with('demand',$demand)->with('motivos',$motivos)->with('urgencias',$urgencias)->with('users',$users)->with('type',$type);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'users_id' => 'required',
            'description_case' => 'required|string|min:3',
            'adress_animals' => 'required|string|min:3',
            'photo_ref' => 'required|string|min:1',
            'motivo_id' => 'required',
            'urgencia_id' => 'required',
            'types_status_id' => 'required',
        ]);

        $demand = Demands_animalss::findOrFail($id);
        $demand->update($request->all());
        return redirect()->route('historial_admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Demands_animalss::find($id)->delete();
        return redirect()->route('historial_admin.index');
    }
}

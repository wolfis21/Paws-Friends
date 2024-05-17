<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demand_animal_has_fundation;
use App\Models\Fundation;
use App\Models\Demands_animalss;
use App\Models\StatusFund;
use App\Http\Controllers\Controller;
use App\Models\Types_status;

class Demand_animal_has_fundationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $demand = Demands_animalss::all(); 
        $fundations = Fundation::all();
        $contacto = Demand_animal_has_fundation::all();

        return view('moduloRescate.contactarfundaciones.index')->with('demand', $demand)
        ->with('fundations', $fundations)->with('contacto', $contacto);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $demand = Demands_animalss::all(); 
        $fundations = Fundation::all();
        $contacto = Demand_animal_has_fundation::all();

        return view('moduloRescate.contactarfundaciones.create')->with('demand', $demand)
        ->with('fundations', $fundations)->with('contacto', $contacto);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'demands_animals_id' => 'required',
            'fundation_id' => 'required',
            'description' => 'required|string|min:3',
        ]);

        Demand_animal_has_fundation::create($request->all());

        return redirect()->route('contactarfundaciones.index');
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
        $demand_animal_has_fundation = Demand_animal_has_fundation::find($id);
        $demand = Demands_animalss::all();
        $status = StatusFund::all();
        $type = Types_status::all();
        return view('moduloRescate.contactarfundaciones.edit')->with('demand_animal_has_fundation',$demand_animal_has_fundation)->with('demand',$demand)->with('status',$status)->with('type',$type);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'statusfund_id' => 'required',
        ]);

        $demand_animal_has_fundation = Demand_animal_has_fundation::findOrFail($id);
        $demand_animal_has_fundation->demands_animals_id = $request->input('demands_animals_id');
        $demand_animal_has_fundation->fundation_id = $request->input('fundation_id');
        $demand_animal_has_fundation->statusfund_id = $request->input('statusfund_id');
        $demand_animal_has_fundation->save();

        $demand = Demands_animalss::findOrFail($demand_animal_has_fundation->demands_animals_id);
        $demand->statusfund_id = $request->input('statusfund_id');
        $demand->save();
        
        return redirect()->route('contactarfundaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Demand_animal_has_fundation::find($id)->delete();
        return redirect()->route('contactarfundaciones.index');
    }
}

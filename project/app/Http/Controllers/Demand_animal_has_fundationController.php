<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demand_animal_has_fundation;
use App\Models\Fundation;
use App\Models\Demands_animalss;
use App\Models\Types_status;
use App\Http\Controllers\Controller;

class Demand_animal_has_fundationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $demand = Demands_animalss::all(); 
        $fundations = Fundation::all();
        $status = Types_status::all();

        return view('moduloRescate.contactarfundaciones.create')->with('demand', $demand)
        ->with('fundations', $fundations)->with('status', $status);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('moduloRescate.contactarfundaciones.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

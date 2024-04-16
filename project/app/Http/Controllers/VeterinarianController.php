<?php

namespace App\Http\Controllers;

use App\Models\Veterinarian;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VeterinarianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {   
        $veterinarios = Veterinarian::all();
        return view('vets.index')->with('veterinarios',$veterinarios);
    }

    public function vetuser()
    {
        return view('vets.vetsuser');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $veterinarios = new Veterinarian();

        $veterinarios->name = $request->get('name');
        $veterinarios->address = $request->get('address');
        $veterinarios->phone = $request->get('phone');
        $veterinarios->email = $request->get('email');
        $veterinarios->link_ref = $request->get('link_ref');
        $veterinarios->img_ref = $request->get('img_ref');
        $veterinarios->specialist_animals = $request->get('specialist_animals');

        $veterinarios->save();
        return redirect()->route('vets.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Veterinarian $veterinarian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Veterinarian $veterinarian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Veterinarian $veterinarian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Veterinarian $veterinarian)
    {
        //
    }
}

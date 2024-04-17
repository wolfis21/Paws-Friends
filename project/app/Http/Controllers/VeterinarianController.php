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
        $veterinario = new Veterinarian();
        return view('vets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $request->validate([
            'name' => 'required|string|min:3',
            'address' => 'string',
            'phone' => 'required|unique:veterinarians|alpha_num|min_digits:11',
            'email' => 'required|unique:veterinarians|email',
            'link_ref' => 'nullable',
            'img_ref' => 'required|string',
            'specialist_animals' => 'required|string',
        ]);

        $veterinario = Veterinarian::create($request->all());
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

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
        return view('vets.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'este es el create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

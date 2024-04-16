<?php

namespace App\Http\Controllers;

use App\Models\Housing;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HousingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('housings.index');
    }

    public function housinguser()
    {
        return view('housings.housinguser');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Housing $housing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Housing $housing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Housing $housing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Housing $housing)
    {
        //
    }
}

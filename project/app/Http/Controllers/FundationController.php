<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fundation;
use App\Http\Controllers\Controller;

class FundationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fundations = Fundation::all();
        return view('moduloRescate.fundations.index')->with('fundations', $fundations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('moduloRescate.fundations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:fundation', 'string', 'min:3' ],
            'phone' => ['required', 'unique:fundation', 'alpha_num', 'min_digits:11'],
            'email' => ['required', 'email', 'unique:fundation', 'string', 'min:3'],
            'description' => ['required', 'string', 'min:3'],
        ]);


        Fundation::create($request->all());

        return redirect()->route('fundations.index');
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
        $fundation = Fundation::find($id);
        return view('moduloRescate.fundations.edit')->with('fundation',$fundation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3' ],
            'phone' => ['required', 'alpha_num', 'min_digits:11'],
            'email' => ['required', 'email', 'string', 'min:3'],
            'description' => ['required', 'string', 'min:3'],
        ]);
        $fundation = Fundation::findOrFail($id);
        $fundation->update($request->all());
        return redirect()->route('fundations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Fundation::find($id)->delete();
        return redirect()->route('fundations.index');
    }
}

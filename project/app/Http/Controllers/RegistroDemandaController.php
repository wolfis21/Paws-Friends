<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demands_animalss;
use App\Models\Motivo;
use App\Models\Urgencia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistroDemandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::check()){
            $demand = Demands_animalss::all();
            $motivos = Motivo::all();
            $urgencias = Urgencia::all();
            $users = User::all();
    
            return view('moduloRescate.registrodemanda.create')->with('demand', $demand)
            ->with('motivos', $motivos)->with('urgencias', $urgencias)->with('users', $users);
        } else {
            return redirect()->route('login');
        }
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
            'photo_ref' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'motivo_id' => 'required',
            'urgencia_id' => 'required',
        ]);

        $demands = $request->all();

        if ($image = $request->file('photo_ref')) {
            $path = 'storage/moduloRescate/images/';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $demands['photo_ref'] = "$imageName";
        }

        Demands_animalss::create($demands);

        return redirect()->route('historial_user.index');
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

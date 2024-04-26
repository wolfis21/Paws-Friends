<?php

namespace App\Http\Controllers\moduloServicios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\moduloServicios\Dog_groomer;

class DogGroomerController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    //todo funciones admin
    public function dogGroomerAdmin(){
        $dogGroomers = Dog_Groomer::all();
        return view('moduloServicios.dogGroomer.admin.index')->with('dogGroomers', $dogGroomers);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function createDogGroomer(){
        $dogGroomer = new Dog_Groomer();
        return view('moduloServicios.dogGroomer.admin.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function storeDogGroomer(Request $request){
        $request->validate([
            'name' => 'required|string|min:3',
            'address' => 'string',
            'phone' => 'required|unique:veterinarians|alpha_num|min_digits:11',
            'link_ref' => 'nullable',
            'img_ref' => 'required|string',
        ]);

        $dogGroomer = Dog_Groomer::create($request->all());
        return redirect()->route('dogGroomerAdmin');
    }
        /**
     * Display the specified resource.
     */
    public function showDogGroomer(string $id){
        $dogGroomer = Dog_Groomer::find($id);
        return view('moduloServicios.dogGroomer.admin.show')->with('dogGroomer', $dogGroomer);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function editDogGroomer(string $id){
        $dogGroomer = Dog_Groomer::find($id);
        return view('moduloServicios.dogGroomer.admin.edit')->with('dogGroomer', $dogGroomer);
    }
    /**
     * Update the specified resource in storage.
     */
    public function updateDogGroomer(Request $request, string $id){
        $request->validate([
            'name' => 'required|string|min:3',
            'address' => 'string',
            'phone' => 'required|unique:veterinarians|alpha_num|min_digits:11',
            'link_ref' => 'nullable',
            'img_ref' => 'required|string',
        ]);
        $dogGroomer = Dog_Groomer::findOrFail($id);
        $dogGroomer->update($request->all());
        return redirect()->route('dogGroomerAdmin');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroyDogGroomer(string $id){
        $dogGroomer = Dog_Groomer::find($id)->delete();
        return redirect()->route('dogGroomerAdmin');
    }
    //todo funciones user
    public function dogGroomerUser()
    {
        return view('moduloServicios.dogGroomer.user.index');
    }
}

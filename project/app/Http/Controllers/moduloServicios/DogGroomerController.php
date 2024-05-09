<?php

namespace App\Http\Controllers\moduloServicios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\moduloServicios\Dog_groomer;
use App\Models\moduloServicios\Dog_groomer_has_comments;

class DogGroomerController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    //todo funciones admin
    public function dogGroomerAdmin(){
        $dogGroomers = Dog_Groomer::all();
        $dogGroomersComments = Dog_groomer_has_comments::all();
        return view('moduloServicios.dogGroomer.admin.index')
        ->with('dogGroomers', $dogGroomers)
        ->with('dogGroomersComments', $dogGroomersComments);
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
            'img_ref' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'all_puntuation' => 'nullable',
            'puntuation' => 'nullable',
        ]);
        
        $dogGroomer = $request->all();
        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloServicios/images/dogGroomers';
            $imageName = date('YmdHis')."_".$image->getClientOriginalExtension();
            $image->move($path, $imageName );
            $dogGroomer['img_ref'] = "$imageName";
        }
        Dog_Groomer::create($dogGroomer);
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
            'img_ref' => 'nullable|string',
            'all_puntuation' => 'nullable',
            'puntuation' => 'nullable',
        ]);
        $dogGroomer = Dog_groomer::findOrFail($id);
        $dogGroomerReq = $request->all();
        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloServicios/images/dogGroomers';
            $imageName = date('YmdHis')."_".$image->getClientOriginalExtension();
            $image->move($path, $imageName );
            $dogGroomerReq['img_ref'] = "$imageName";
        }
        $dogGroomer->update($dogGroomerReq);

        return redirect()->route('dogGroomerAdmin');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroyDogGroomer(string $id){
        $dogGroomer = Dog_Groomer::find($id);
        $path = public_path().'/storage/moduloServicios/images/dogGroomers/'.$dogGroomer->img_ref;
        unlink($path);
        $dogGroomer->delete();
        return redirect()->route('dogGroomerAdmin');
    }
    //todo funciones user
    public function dogGroomerUser(){
        $dogGroomers = Dog_Groomer::paginate(6);
        $dogGroomersComments = Dog_Groomer_has_comments::all();
        return view('moduloServicios.dogGroomer.user.doguser')
        ->with('dogGroomers', $dogGroomers)
        ->with('dogGroomersComments',$dogGroomersComments);
    }
    public function showdogGroomerUser($id_dog){
        $dogGroomers = Dog_Groomer::find($id_dog);
        return view('moduloServicios.dogGroomer.user.showdogGroomer')
        ->with('dogGroomer', $dogGroomers);
    }
}

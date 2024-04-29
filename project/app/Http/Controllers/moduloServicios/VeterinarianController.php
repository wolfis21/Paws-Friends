<?php

namespace App\Http\Controllers\moduloServicios;
 
use App\Models\moduloServicios\Veterinarian;
use App\Http\Controllers\Controller;
use App\Http\Controllers\moduloServicios;
use App\Models\moduloServicios\Veterinarians_has_comments;
use Illuminate\Http\Request;

class VeterinarianController extends Controller
{
    //todo Admin
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $veterinarians = Veterinarian::all();
        $veterinariansComments = Veterinarians_has_comments::all();


        return view('moduloServicios.veterinarian.admin.index')    
        ->with('veterinarians', $veterinarians)
        ->with('veterinariansComments', $veterinariansComments);
    }

    // public function vetuser()
    // {
    //     return view('veterinarian.admin.vetsuser');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $veterinarians = new Veterinarian();
        return view('moduloServicios.veterinarian.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3', //no validaron email
            'address' => 'string',
            'phone' => 'required|unique:veterinarians|alpha_num|min_digits:11',
            'link_ref' => 'nullable',
            'img_ref' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $veterinarian = $request->all();

        if ($image = $request->file('img_ref')) {
            $imgPhotoPath = $image->store('docs', 'public');
        }
        
        Veterinarian::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'link_ref' => $request['link_ref'],
            'img_ref' => $imgPhotoPath,
            'specialist_animals' => $request['specialist_animals'],
        ]);
        return redirect()->route('index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $veterinarian = Veterinarian::find($id);
        return $veterinarian;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_vet)
    {
        $veterinarian = Veterinarian::find($id_vet);
        return view('moduloServicios.veterinarian.admin.edit')->with('veterinarian',$veterinarian);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'address' => 'string',
            'phone' => 'required||alpha_num|min_digits:11',
            'email' => 'required|email',
            'link_ref' => 'nullable',
            'img_ref' => 'required|string',
            'specialist_animals' => 'required|string',
        ]);
        $veterinarian = Veterinarian::findOrFail($id);
        $veterinarian->update($request->all());
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_vet)
    {
        Veterinarian::find($id_vet)->delete();
        return redirect()->route('index');

    }

    //todo User
    public function veterinarioUser(){
        return view('moduloServicios.veterinarian.user.vetsuser');
    }
}
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
            'img_ref' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $veterinarian = $request->all();

        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloServicios/images/vets';
            $imageName = date('YmdHis')."_".$image->getClientOriginalExtension();
            $image->move($path, $imageName );
            $veterinarian['img_ref'] = "$imageName";
        }
        
        Veterinarian::create($veterinarian);
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
            'img_ref' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'specialist_animals' => 'required|string',
        ]);
        $veterinarian = Veterinarian::findOrFail($id);
        $vet = $request->all();

        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloServicios/images/vets';
            $imageName = date('YmdHis')."_".$image->getClientOriginalExtension();
            $image->move($path, $imageName );
            $vet['img_ref'] = "$imageName";
        }else{
            unset($vet['img_ref']);
        }

        $veterinarian->update($vet);
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_vet)
    {
        $veterinarian = Veterinarian::find($id_vet);
        $path = public_path().'/storage/moduloServicios/images/vets/'.$veterinarian->img_ref;
        unlink($path);
        $veterinarian->delete();
        return redirect()->route('index');

    }

    //todo User
    public function veterinarioUser(){
        $veterinarians = Veterinarian::all();
        $veterinariansComments = Veterinarians_has_comments::all();
        return view('moduloServicios.veterinarian.user.vetsuser')
        ->with('veterinarians', $veterinarians)
        ->with('veterinariansComments', $veterinariansComments);
    }
    public function showVeterinarianUser($id_vet){
        $veterinarian = Veterinarian::find($id_vet);
        return view('moduloServicios.veterinarian.user.showVeterinarian')
        ->with('veterinarian', $veterinarian);
    }
}

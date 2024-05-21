<?php

namespace App\Http\Controllers\moduloServicios;

use App\Models\moduloServicios\Veterinarian;
use App\Http\Controllers\Controller;
use App\Http\Controllers\moduloServicios;
use App\Models\moduloServicios\Comment;
use App\Models\moduloServicios\Puntuations;
use App\Models\moduloServicios\Veterinarians_has_comments;
use App\Models\moduloServicios\Veterinarians_has_puntuation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\search;

class VeterinarianController extends Controller
{
    //todo Admin
    /** 
     * Display a listing of the r source.
     */
    public function indexVeterinarian()
    {
        $veterinarians = Veterinarian::all();
        $veterinariansComments = Veterinarians_has_comments::all();
        return view('moduloServicios.veterinarian.admin.index')
            ->with('veterinarians', $veterinarians)
            ->with('veterinariansComments', $veterinariansComments);
    }

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
            'name' => 'required|string|min:3', 
            'email' => 'required|string',
            'address' => 'string',
            'phone' => 'required|unique:veterinarians|alpha_num|min:11', 
            'link_ref' => 'nullable',
            'img_ref' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
            'puntuation' => 'nullable',
        ]);

        $veterinarian = $request->all();

        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloServicios/images/vets';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $veterinarian['img_ref'] = "$imageName";
        }

        Veterinarian::create($veterinarian);
        return redirect()->route('indexVeterinarian');
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
        return view('moduloServicios.veterinarian.admin.edit')->with('veterinarian', $veterinarian);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required',
            'address' => 'string',
            'phone' => 'required||alpha_num|min_digits:11',
            'email' => 'required|email',
            'link_ref' => 'nullable',
            'img_ref' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'specialist_animals' => 'required|string',
            'puntuation' => 'nullable',
        ]);
        $veterinarian = Veterinarian::findOrFail($id);
        $vet = $request->all();

        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloServicios/images/vets';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $vet['img_ref'] = "$imageName";
        } else {
            unset($vet['img_ref']);
        }

        $veterinarian->update($vet);
        return redirect()->route('indexVeterinarian');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_vet)
    {
        $veterinarian = Veterinarian::find($id_vet);
        $path = public_path() . '/storage/moduloServicios/images/vets/' . $veterinarian->img_ref;
        unlink($path);
        $veterinarian->delete();
        return redirect()->route('indexVeterinarian');
    }


    //todo User
    public function veterinarioUser()
    {
        $veterinarians = Veterinarian::all();
        $veterinariansComments = Veterinarians_has_comments::all();
        return view('moduloServicios.veterinarian.user.vetsuser')
            ->with('veterinarians', $veterinarians)
            ->with('veterinariansComments', $veterinariansComments);
    }
    public function verificarPuntuacion($id_vet){
        $veterinarian = Veterinarian::find($id_vet);
        // Verificar si el usuario ya ha dado una puntuación al veterinario
        $puntuacionExistente = Veterinarians_has_puntuation::where('veterinarians_id', $veterinarian->id)
            ->whereHas('puntuations', function ($query) {
                $query->where('users_id', Auth::user()->id);
            })
            ->first();
        return $puntuacionExistente;
    }

    public function showVeterinarianUser($id_vet)
    {
        if (Auth::check()) {
            $veterinarian = Veterinarian::find($id_vet);
            $verificarPuntajeUsuario = $this->verificarPuntuacion($id_vet); 
            $veterinariansComments = Veterinarians_has_comments::where('veterinarians_id', $id_vet)->get();
            return view('moduloServicios.veterinarian.user.showVeterinarian')
                ->with('veterinarian', $veterinarian)
                ->with('verificarPuntajeUsuario', $verificarPuntajeUsuario)
                ->with('veterinariansComments', $veterinariansComments);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function updateVeterinarianPuntuations(Request $request, string $id)
    {
        $veterinarian = Veterinarian::findOrFail($id);
        $vet = $request->all();
        // Verificar si el usuario ya ha dado una puntuación al veterinario
        $puntuacionExistente = $this->verificarPuntuacion($id);

        // Si el usuario ya ha dado una puntuación, actualizarla
        if ($puntuacionExistente) {
            $puntuacionExistente->puntuations()->updateOrCreate(
                ['users_id' => Auth::user()->id],
                ['puntuation' => $vet['puntuation']]
            );
        } else { // Si no, crear una nueva puntuación
            $puntuation = Puntuations::create([
                'puntuation' => $vet['puntuation'],
                'users_id' => Auth::user()->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            
            $puntuacionVeterinario = Veterinarians_has_puntuation::create([
                'puntuations_id' => $puntuation->id,
                'veterinarians_id' => $veterinarian->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
        
        // Obtener el veterinario por su ID y calcular el promedio de sus puntuaciones
        // Ahora puedes acceder al promedio de las puntuaciones a través de la propiedad puntuaciones_avg_puntuation
        $veterinarian = Veterinarian::withAvg('puntuaciones', 'puntuation')->find($id);
        $promedioRedondeado = round($veterinarian->puntuaciones_avg_puntuation);
        $veterinarian->puntuation = $promedioRedondeado;
        $veterinarian->save();
        return redirect()->route('Veterinario');
    }

    public function enviarComentario(Request $request, string $id){
        $veterinarian = Veterinarian::findOrFail($id);
        $comentarioUsuario = $request->all();
        $comment = Comment::create([
            'data_text' => $comentarioUsuario['comments'],
            'date' => date('d g:i:s A'),
            'users_id' => Auth::user()->id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $comentarioVeterinario = Veterinarians_has_comments::create([
            'comments_id' => $comment->id,
            'veterinarians_id' => $veterinarian->id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back();
    }
}

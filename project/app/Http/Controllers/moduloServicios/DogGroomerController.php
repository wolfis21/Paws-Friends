<?php

namespace App\Http\Controllers\moduloServicios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\moduloServicios\Comment;
use App\Models\moduloServicios\Dog_groomer;
use App\Models\moduloServicios\Dog_groomer_has_comments;
use App\Models\moduloServicios\Dog_groomers_has_puntuation;
use App\Models\moduloServicios\Puntuations;
use Illuminate\Support\Facades\Auth;

class DogGroomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //todo funciones admin
    public function dogGroomerAdmin()
    {
        $dogGroomers = Dog_Groomer::all();
        $dogGroomersComments = Dog_groomer_has_comments::all();
        return view('moduloServicios.dogGroomer.admin.index')
            ->with('dogGroomers', $dogGroomers)
            ->with('dogGroomersComments', $dogGroomersComments);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function createDogGroomer()
    {
        $dogGroomer = new Dog_Groomer();
        return view('moduloServicios.dogGroomer.admin.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function storeDogGroomer(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'address' => 'string',
            'phone' => 'required|unique:veterinarians|alpha_num|min_digits:11',
            'link_ref' => 'nullable',
            'img_ref' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'puntuation' => 'nullable',
        ]);

        $dogGroomer = $request->all();
        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloServicios/images/dogGroomers';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $dogGroomer['img_ref'] = "$imageName";
        }
        Dog_Groomer::create($dogGroomer);
        return redirect()->route('dogGroomerAdmin')->with('success','Se agrego la peluqueria correctamente');
    }
    /**
     * Display the specified resource.
     */
    public function showDogGroomer(string $id)
    {
        $dogGroomer = Dog_Groomer::find($id);
        return view('moduloServicios.dogGroomer.admin.show')->with('dogGroomer', $dogGroomer);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function editDogGroomer(string $id)
    {
        $dogGroomer = Dog_Groomer::find($id);
        return view('moduloServicios.dogGroomer.admin.edit')->with('dogGroomer', $dogGroomer);
    }
    /**
     * Update the specified resource in storage.
     */
    public function updateDogGroomer(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'address' => 'string',
            'phone' => 'required|alpha_num|min_digits:11',
            'link_ref' => 'nullable',
            'img_ref' => 'image|mimes:jpeg,png,jpg|max:2048',
            'puntuation' => 'nullable',
        ]);
        $dogGroomer = Dog_groomer::findOrFail($id);
        $dogGroomerReq = $request->all();
        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloServicios/images/dogGroomers';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $dogGroomerReq['img_ref'] = "$imageName";
        }
        $dogGroomer->update($dogGroomerReq);

        return redirect()->route('dogGroomerAdmin')->with('info','Se edito la peluqueria correctamente');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroyDogGroomer(string $id)
    {
        $dogGroomer = Dog_Groomer::find($id);
        $path = public_path() . '/storage/moduloServicios/images/dogGroomers/' . $dogGroomer->img_ref;
        unlink($path);
        $dogGroomer->delete();
        return redirect()->route('dogGroomerAdmin')->with('destroy','Se elimino la peluqueria correctamente');
    }
    //todo funciones user
    public function dogGroomerUser()
    {
        $dogGroomers = Dog_Groomer::all();
        $dogGroomersComments = Dog_Groomer_has_comments::all();
        return view('moduloServicios.dogGroomer.user.doguser')
            ->with('dogGroomers', $dogGroomers)
            ->with('dogGroomersComments', $dogGroomersComments);
    }

    public function verificarPuntuacionDogGroomer($id)
    {
        $dogGroomer = Dog_Groomer::find($id);
        $puntuacionExistente = Dog_groomers_has_puntuation::where('dog_groomer_id', $dogGroomer->id)->whereHas('puntuations', function ($query) {
            $query->where('users_id', Auth::user()->id);
        })
            ->first();
        return $puntuacionExistente;
    }

    public function showdogGroomerUser($id_dog)
    {
        if (Auth::check()) {
            $dogGroomer = Dog_Groomer::find($id_dog);
            $verificarPuntajeUsuario = $this->verificarPuntuacionDogGroomer($id_dog);
            $dogGroomersComments = Dog_groomer_has_comments::where('dog_groomer_id', $id_dog)->get();
            return view('moduloServicios.dogGroomer.user.showdogGroomer')->with('dogGroomer', $dogGroomer)
                ->with('verificarPuntajeUsuario', $verificarPuntajeUsuario)
                ->with('dogGroomersComments', $dogGroomersComments);
        } else {
            return redirect()->route('login')->with('info','Por favor necesita iniciar sesion para acceder a este apartado');
        }
    }

    public function updateDogGroomerPuntuations(Request $request, $id_dog)
    {
        $dogGroomer = Dog_groomer::findOrFail($id_dog);
        $dogGroomerReq = $request->all();
        $puntuacionExistente = $this->verificarPuntuacionDogGroomer($id_dog);
        if ($puntuacionExistente) {
            $puntuacionExistente->puntuations()->updateOrCreate(
                ['users_id' => Auth::user()->id],
                ['puntuation' => $dogGroomerReq['puntuation']]
            );
        } else {
            $puntuation = Puntuations::create([
                'puntuation' => $dogGroomerReq['puntuation'],
                'users_id' => Auth::user()->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $puntuaciondogGroomer = Dog_groomers_has_puntuation::create([
                'puntuations_id' => $puntuation->id,
                'dog_groomer_id' => $dogGroomer->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
        $dogGroomer = Dog_groomer::withAvg('puntuaciones', 'puntuation')->find($id_dog);
        $promedioRedondeado = round($dogGroomer->puntuaciones_avg_puntuation);
        $dogGroomer->puntuation = $promedioRedondeado;
        $dogGroomer->save();
        return redirect()->route('showDogGroomerUser', $id_dog);
    }

    public function enviarComentarioDogGroomer(Request $request, $id_dog)
    {
        $dogGroomer = Dog_groomer::findOrFail($id_dog);
        $comentarioUsuario = $request->all();
        $comment = Comment::create([
            'data_text' => $comentarioUsuario['comments'],
            'date' => date('d g:i:s A'),
            'users_id' => Auth::user()->id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $comentarioVeterinario = Dog_groomer_has_comments::create([
            'comments_id' => $comment->id,
            'dog_groomer_id' => $dogGroomer->id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back();
    }
}

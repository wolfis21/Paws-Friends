<?php

namespace App\Http\Controllers\moduloServicios;

use App\Models\moduloServicios\Housing;
use App\Http\Controllers\Controller;
use App\Models\moduloServicios\Comment;
use App\Models\moduloServicios\Housings_has_comments;
use App\Models\moduloServicios\Housings_has_puntuation;
use App\Models\moduloServicios\Puntuations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HousingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //todo funciones admin

    public function housingAdmin()
    {
        $housings = Housing::all();
        $housingsComments = Housings_has_comments::all();
        return view('moduloServicios.housings.admin.index')
            ->with('housings', $housings)
            ->with('housingsComments', $housingsComments);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function createHousing()
    {
        $housing = new Housing();
        return view('moduloServicios.housings.admin.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function storeHousing(Request $request)
    {
        $request->validate([
            'address' => 'required|string|min:3',
            'phone' => 'required|unique:housings|alpha_num|min_digits:3',
            'description_location' => 'required|string|min:6',
            'type_animals' => 'required',
            'food_offer' => 'required',
            'link_ref' => 'nullable',
            'img_ref' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'puntuation' => 'nullable',
        ]);

        $housing = $request->all();

        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloServicios/images/housings';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $housing['img_ref'] = "$imageName";
        }
        Housing::create($housing);
        return redirect()->route('housingAdmin')->with('success','Se creo el alojamiento correctamente');
    }
    /**
     * Display the specified resource.
     */
    public function showHousing(string $id)
    {
        $housing = Housing::find($id);
        return view('moduloServicios.housings.admin.show')->with('housing', $housing);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function editHousing(string $id)
    {
        $housing = Housing::find($id);
        return view('moduloServicios.housings.admin.edit')->with('housing', $housing);
    }
    /**
     * Update the specified resource in storage.
     */
    public function updateHousing(Request $request, string $id)
    {
        $request->validate([
            'address' => 'required|string|min:3',
            'phone' => 'required|alpha_num|min_digits:3',
            'description_location' => 'required|string|min:6',
            'type_animals' => 'required',
            'food_offer' => 'required',
            'link_ref' => 'nullable',
            'img_ref' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'puntuation' => 'nullable',
        ]);
        $housing = Housing::findOrFail($id);
        $housingReq = $request->all();
        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloServicios/images/housings';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $housingReq['img_ref'] = "$imageName";
        } else {
            unset($housingReq['img_ref']);
        }

        $housing->update($housingReq);
        return redirect()->route('housingAdmin')->with('info','Se edito el alojamiento correctamente');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroyHousing(string $id)
    {
        $housing = Housing::find($id);
        $path = public_path() . '/storage/moduloServicios/images/housings/' . $housing->img_ref;
        unlink($path);
        $housing->delete();
        return redirect()->route('housingAdmin')->with('destroy','Se elimino el alojamiento correctamente');
    }
    //todo funciones user
    public function housingUser()
    {
        $housings = Housing::all();
        $housingsComments = Housings_has_comments::all();
        return view('moduloServicios.housings.user.houser')
            ->with('housings', $housings)
            ->with('housingsComments', $housingsComments);
    }
    public function verificarPuntuacionHousing($id)
    {
        $housing = Housing::find($id);
        // Verificar si el usuario ya ha dado una puntuación al veterinario
        $puntuacionExistente = Housings_has_puntuation::where('housings_id', $housing->id)
            ->whereHas('puntuations', function ($query) {
                $query->where('users_id', Auth::user()->id);
            })
            ->first();
        return $puntuacionExistente;
    }

    public function showHousingUser($id_hou)
    {
        if (Auth::check()) {
            $housing = Housing::find($id_hou);
            $verificarPuntajeUsuario = $this->verificarPuntuacionHousing($id_hou); 
            $housingsComments = Housings_has_comments::where('housings_id', $id_hou)->get();
            return view('moduloServicios.housings.user.showHousings')
                ->with('housing', $housing)
                ->with('verificarPuntajeUsuario', $verificarPuntajeUsuario)
                ->with('housingsComments', $housingsComments);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function updateHousingPuntuations(Request $request, $id_hou){
        $housing = Housing::findOrFail($id_hou);
        $housingReq = $request->all();
        $puntuacionExistente = $this->verificarPuntuacionHousing($id_hou);
        if ($puntuacionExistente) {
            $puntuacionExistente->puntuations()->updateOrCreate(
                ['users_id' => Auth::user()->id],
                ['puntuation' => $housingReq['puntuation']]
            );
        } else {
            $puntuation = Puntuations::create([
                'puntuation' => $housingReq['puntuation'],
                'users_id' => Auth::user()->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            
            $puntuacionHousing = Housings_has_puntuation::create([
                'puntuations_id' => $puntuation->id,
                'housings_id' => $housing->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
        $housing = Housing::withAvg('puntuaciones','puntuation')->find($id_hou);
        $promedioRedondeado = round($housing->puntuaciones_avg_puntuation);
        $housing->puntuation = $promedioRedondeado;
        $housing->save();
        return redirect()->route('showHousingUser', $id_hou);
    }

    public function enviarComentarioHousing(Request $request, string $id){
        $housing = Housing::findOrFail($id);
        $comentarioUsuario = $request->all();
        $comment = Comment::create([
            'data_text' => $comentarioUsuario['comments'],
            'date' => date('d g:i:s A'),
            'users_id' => Auth::user()->id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $comentarioVeterinario = Housings_has_comments::create([
            'comments_id' => $comment->id,
            'housings_id' => $housing->id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back();
    }
}

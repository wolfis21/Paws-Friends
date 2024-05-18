<?php

namespace App\Http\Controllers\moduloAdopcionDonacion;
use App\Http\Controllers\Controller;
use App\Models\moduloAdopcionDonacion\Donations;

use Illuminate\Http\Request;

class DonacionesController extends Controller
{
    public function index()
    {
      $donations= Donations::all();

      return view('moduloAdopcionDonacion.donations.admin.index')
      ->with('donations', $donations);
    }

    public function create(){
      //a nivel de admin 
      $donations = new Donations();
      return view('moduloAdopcionDonacion.donations.admin.create');
    }

    public function store(Request $request)
    {
/*         $request->validate([
            'date' => 'required|date', 
            'type_donation' => 'required|string',
            'description_ref' => 'string',
            'qty' => 'min:1', 
            'photo_ref' => 'nullable|string',
            'destino_fundacion' => 'required|string',
            'users_id' => 'required',
        ]); */

        $donations = $request->all();

        if ($image = $request->file('photo_ref')) {
            $path = 'storage/moduloDonacion/images/';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $donations['photo_ref'] = "$imageName";
        }

        Donations::create($donations);

        if($request['direct'] == 1){
          $donations= Donations::all();

          return view('moduloAdopcionDonacion.donations.admin.index')
          ->with('donations', $donations);
        }else{
          return view('moduloAdopcionDonacion.donations.user.Donaciones');
        }
    }
}

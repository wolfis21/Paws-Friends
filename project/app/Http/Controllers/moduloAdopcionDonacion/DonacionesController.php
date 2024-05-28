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
      $request->validate([
        'date' =>'required',
        'type_donation' =>'required',
        'description_ref' =>'required',
        'qty' =>'required',
        'photo_ref' =>'required',
        'destino_fundacion' =>'required',
        'users_id' =>'required',
    ]);

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
          return redirect()->route('indexDonations')->with('success','Su donacion fue enviada exitosamente');
        }
    }
}

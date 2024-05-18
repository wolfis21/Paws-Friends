<?php

namespace App\Http\Controllers;

use App\Models\moduloCatalogo\Shop;
use App\Models\moduloCatalogo\shops_has_puntuation;
use App\Models\moduloCatalogo\Puntuations;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function shopAdmin()
    {
        //
        $shop = Shop::all();
        return view('moduloCatalogo.shop.admin.index', compact('shop') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createShop()
    {
        //
        $shop = new Shop();
        return view('moduloCatalogo.shop.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeShop(Request $request)
    {
        $request->validate([

            'name'=> 'required|string|min:3',
            'address'=> 'required|string',
            'phone'=> 'required|min_digits:11',
            'mail'=> 'required',
            'link_ref'=> 'required',

        ]);

        $shop = Shop::create($request->all());

        return redirect()->route('<moduloCatalogo.shop.admin.index');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function editShop(Shop $id)
    {
        //
        $shop = Shop::find($id);
        return view('moduloCatalogo.shop.admin.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateShop(Request $request, Shop $id)
    {
        $request->validate([
            'name'=> 'required|string|min:3',
            'address'=> 'required|string',
            'phone'=> 'required|min_digits:11',
            'mail'=> 'required',
            'link_ref'=> 'required',
        ]);

        $shop = Shop::find($id);

        $shop->update($request->all());

        return redirect()->route('moduloCatalogo.shop.admin.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyShop(Shop $id)
    {
        $shop = Shop::find($id);
        $shop->delete();
        return redirect()->route('moduloCatalogo.shop.admin.index');
    }

    //funciones de user

    public function ShopUser()
    {
        return view('moduloCatalogo.shop.user');
    }

    public function verificarPuntuacionShop($id)
    {
        $shop = Shop::find($id);
        $puntuacionExistente = shops_has_puntuation::where('shops_id', $shop->id)->whereHas('puntuations', function ($query) {
            $query->where('users_id', Auth::user()->id);
        })
            ->first();
        return $puntuacionExistente;
    }    

    public function updateShopPuntuations(Request $request, $id_shop)
    {
        $shop = Shop::findOrFail($id_shop);
        $shopReq = $request->all();
        $puntuacionExistente = $this->verificarPuntuacionShop($id_shop);
        if ($puntuacionExistente) {
            $puntuacionExistente->puntuations()->updateOrCreate(
                ['users_id' => Auth::user()->id],
                ['puntuation' => $shopReq['puntuation']]
            );
        } else {
            $puntuation = Puntuations::create([
                'puntuation' => $shopReq['puntuation'],
                'users_id' => Auth::user()->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $puntuacionShop = shops_has_puntuation::create([
                'puntuations_id' => $puntuation->id,
                'shops_id' => $shop->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
        $shop = Shop::withAvg('puntuaciones', 'puntuation')->find($id_shop);
        $promedioRedondeado = round($shop->puntuaciones_avg_puntuation);
        $shop->puntuation = $promedioRedondeado;
        $shop->save();
        return redirect()->route('showShopUser', $id_shop);
    }
  
}

<?php

namespace App\Http\Controllers\moduloCatalogo;

use App\Http\Controllers\Controller;
use App\Models\moduloCatalogo\Puntuations;
use App\Models\moduloCatalogo\Shop;
use App\Models\moduloCatalogo\shops_has_puntuation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function shopAdmin()
    {
        //
        $shops = Shop::all();
        return view('moduloCatalogo.shop.admin.index')->with('shops', $shops);
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
            'address'=> 'string',
            'phone'=> 'required|alpha_num|min_digits:11',
            'link_ref'=> 'nullable',
            'img_ref' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'puntuation' => 'nullable',
        ]);

        $shop =$request->all();

        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloCatalogo/images/shops';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $shop['img_ref'] = "$imageName";
        }

        Shop::create($shop);

        return redirect()->route('shopAdmin');

    }

    public function showShop(string $id)
    {
        $shop = Shop::find($id);
        return view('moduloCatalogo.shop.admin.show')->with('shop', $shop);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function editShop($id)
    {
        //
        $shop = Shop::find($id);
        return view('moduloCatalogo.shop.admin.edit')->with('shop', $shop);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateShop(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required|string|min:3',
            'address'=> 'string',
            'phone'=> 'required|alpha_num|min_digits:11',
            'link_ref'=> 'nullable',
            'img_ref' => 'image|mimes:jpeg,png,jpg|max:2048',
            'puntuation' => 'nullable',
        ]);

        $shop = Shop::findOrFail($id);
        $shopReq = $request->all();

        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloCatalogo/images/shops';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $shopReq['img_ref'] = "$imageName";
        } else {
            unset($shopReq['img_ref']);
        }

        $shop->update($shopReq);

        return redirect()->route('shopAdmin');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyShop($id)
    {
        $shop = Shop::find($id);
        $path = public_path() . '/storage/moduloCatalogo/images/shops/' . $shop->img_ref;
        unlink($path);
        $shop->delete();
        return redirect()->route('shopAdmin');
    }

    //todo funciones de user

    public function ShopUser()
    {
        $shops = Shop::all();
        return view('moduloCatalogo.shop.user.shopuser')->with('shops', $shops);
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

    public function showshopUser($id_shop)
    {
        if (Auth::check()) {
            $shop = Shop::find($id_shop);
            $verificarPuntajeUsuario = $this->verificarPuntuacionShop($id_shop);
            return view('moduloCatalogo.shop.user.showshop')->with('shop', $shop)
                ->with('verificarPuntajeUsuario', $verificarPuntajeUsuario);
        } else {
            return redirect()->route('login');
        }
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
        return redirect()->route('showshopUser', $id_shop);
    }
}

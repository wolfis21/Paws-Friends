<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

    public function ShopUser()
    {
        return view('moduloCatalogo.shop.user');
    }

  
}

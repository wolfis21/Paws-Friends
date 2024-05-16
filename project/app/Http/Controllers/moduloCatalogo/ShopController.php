<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\shops;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $shop = Shop::all();
        return view('store.shop.index', compact('shop') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $shop = new Shop();
        return view('store.shop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name'=> 'required|string|min:3',
            'address'=> 'required|string',
            'phone'=> 'required|min_digits:11',
            'mail'=> 'required',
            'link_ref'=> 'required',

        ]);

        $shop = Shop::create($request->all());

        return redirect()->route('<store.shop.index')
        ->with('success', 'Tienda creada');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $id)
    {
        //
        $shop = Shop::find($id);
        return view('store.shop.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $id)
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

        return redirect()->route('store.shop.index')
        ->with('success', 'Tienda actualizada');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $id)
    {
        $shop = Shop::find($id);
        $shop->delete();
        return redirect()->route('store.shop.index')
        ->with('success', 'Tienda borrada');
    }
}

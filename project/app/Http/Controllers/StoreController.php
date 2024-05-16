<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\moduloCatalogo\Product;

class StoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Handle the incoming request.
     */
    public function main(Request $request)
    {
        return view('store.main');
    }

    public function products(Request $request)
    {
        return view('store.products');
    }

    public function products_details(Request $request, $product_id)
    {
        //  $product = Product::find($product_id); cuando haya base de datos
        $product = new Product;
        $product->name = "Pienso Light de Pavo para Perros por Grature"; 
        $product->description = "Pienso natural light de pavo para perros adultos 
        de todas las razas y tamaños   Grature Pavo es una receta elaborada 
        con ingredientes naturales para perros adultos de cualquier raza y 
        tamaño a partir de 1 año.";
        $product->category_id = 1;
        $product->img_ref =  asset('/css/moduloCatalogo/producto1.png');
        $product->quantity = 1;
        return view('store.products_details')->with('product', $product);
    }

    public function recommendations(Request $request)
    {
        return view('store.recommendations');
    }
}

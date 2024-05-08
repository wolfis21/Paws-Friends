<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        /**
     * Handle the incoming request.
     */
    public function products(Request $request)
    {
        return view('store.products');
    }

    public function products_details(Request $request, $product_id)
    {
        return view('store.products_details')->with('product_id', $product_id);
    }

    public function recommendations(Request $request)
    {
        return view('store.recommendations');
    }
}

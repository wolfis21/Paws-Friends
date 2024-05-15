<?php

namespace App\Http\Controllers;

use App\Models\categories_product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class Categories_productController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //uso clase Category de modelo categories_product
        $categories = Category::all();
        return view('store.categories_product.index', compact('categories') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('store.categories_product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name'=> 'required|string|min:3',
            'description'=> 'required',

        ]);

        $categories = Category::create($request->all());


        return redirect()->route('<store.categories_product.index')
        ->with('success', 'Categoria de producto creado');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $id)
    {
        //
        $categories = Category::find($id);
        return view('store.categories_product.show', compact('categories'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $id)
    {
        //
        $categories = Category::find($id);
        return view('store.categories_product.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $id)
    {
        $request->validate([
            'name'=> 'required|string|min:3',
            'description'=> 'required',
        ]);

        $categories = Category::find($id);

        $categories->update($request->all());

        return redirect()->route('store.categories_product.index')
        ->with('success', 'Categoria de producto actualizado');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->route('store.categories_product.index')
        ->with('success', 'Categoria de produto borrado');
    }
}

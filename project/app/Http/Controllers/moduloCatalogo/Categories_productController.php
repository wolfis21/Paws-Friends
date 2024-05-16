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
    public function categoriesProductAdmin()
    {
        //uso clase Category de modelo categories_product
        $categories = Category::all();
        return view('store.categories_product.admin.index', compact('categories') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createCategoryProduct()
    {
        //
        return view('store.categories_product.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeCategoryProduct(Request $request)
    {
        $request->validate([

            'name'=> 'required|string|min:3',
            'description'=> 'required',

        ]);

        $categories = Category::create($request->all());


        return redirect()->route('<store.categories_product.admin.index')
        ->with('success', 'Categoria de producto creado');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editCategoryProduct(Category $id)
    {
        //
        $categories = Category::find($id);
        return view('store.categories_product.admin.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCategoryProduct(Request $request, Category $id)
    {
        $request->validate([
            'name'=> 'required|string|min:3',
            'description'=> 'required',
        ]);

        $categories = Category::find($id);

        $categories->update($request->all());

        return redirect()->route('store.categories_product.admin.index')
        ->with('success', 'Categoria de producto actualizado');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyCategoryProduct(Category $id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->route('store.categories_product.admin.index')
        ->with('success', 'Categoria de produto borrado');
    }
}

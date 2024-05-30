<?php

namespace App\Http\Controllers\moduloCatalogo;

use App\Http\Controllers\Controller;
use App\Models\moduloCatalogo\categoryProductsAnimals;
use Illuminate\Http\Request;

class CategoryProduct extends Controller
{
    public function index(){
        $categories = categoryProductsAnimals::all();
        return view('moduloCatalogo.category.index', compact('categories'));
    }
    public function create(){
        $category = new categoryProductsAnimals();
        return view('moduloCatalogo.category.create', compact('category'));
    }
    public function store(Request $request){
        $category = new categoryProductsAnimals();
        $category->name = $request['name'];
        $category->save();

        $categories = categoryProductsAnimals::all();
        return view('moduloCatalogo.category.index', compact('categories'));

    }
    public function destroy($id){
        $category = categoryProductsAnimals::find($id);
        $category->delete();
        return redirect()->route('moduloCatalogo.category.index')->with('destroy','Se elimino la categoria correctamente');
    }
}

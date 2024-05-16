<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Muestra una lista de los productos.
     */
    public function index()
    {
        // Recupera todos los productos de la base de datos
        $products = Product::all();
        // Retorna la vista 'index' con los productos
        return view('products.index', compact('products'));
    }

    /**
     * Muestra el formulario para crear un nuevo producto.
     */
    public function create()
    {
        // Retorna la vista 'create' para crear un nuevo producto
        return view('products.create');
    }

    /**
     * Almacena un nuevo producto en la base de datos.
     */
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'img_ref' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'quantity' => 'required|integer|min:0',
            'category_animal_id' => 'nullable|exists:categories_animal,id',
        ]);

        // Crea un nuevo producto con los datos validados
        Product::create($request->all());

        // Redirige a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Producto creado exitosamente.');
    }

    /**
     * Muestra un producto específico.
     */
    public function show(Product $product)
    {
        // Retorna la vista 'show' con el producto especificado
        return view('products.show', compact('product'));
    }

    /**
     * Muestra el formulario para editar un producto específico.
     */
    public function edit(Product $product)
    {
        // Retorna la vista 'edit' con el producto especificado
        return view('products.edit', compact('product'));
    }

    /**
     * Actualiza un producto específico en la base de datos.
     */
    public function update(Request $request, Product $product)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'img_ref' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'quantity' => 'required|integer|min:0',
            'category_animal_id' => 'nullable|exists:categories_animal,id',
        ]);

        // Actualiza el producto con los datos validados
        $product->update($request->all());

        // Redirige a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Elimina un producto específico de la base de datos.
     */
    public function destroy(Product $product)
    {
        // Elimina el producto especificado
        $product->delete();

        // Redirige a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Producto eliminado exitosamente.');
    }
}



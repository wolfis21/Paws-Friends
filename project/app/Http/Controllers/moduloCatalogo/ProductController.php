<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Muestra una lista de los productos.
     */
    public function productAdmin()
    {
        // Recupera todos los productos de la base de datos
        $products = product::all();
        // Retorna la vista 'index' con los productos
        return view('products.index', compact('products'));
    }

    /**
     * Muestra el formulario para crear un nuevo producto.
     */
    public function createProduct()
    {
        // Retorna la vista 'create' para crear un nuevo producto
        return view('products.create');
    }

    /**
     * Almacena un nuevo producto en la base de datos.
     */
    public function storeProduct(Request $request)
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
    public function showProduct(Product $id)
    {
        // Retorna la vista 'show' con el producto especificado
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    /**
     * Muestra el formulario para editar un producto específico.
     */
    public function editProduct(Product $id)
    {
        // Retorna la vista 'edit' con el producto especificado
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Actualiza un producto específico en la base de datos.
     */
    public function updateProduct(Request $request, Product $id)
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

        $product = Product::find($id);

        // Actualiza el producto con los datos validados
        $product->update($request->all());

        // Redirige a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Elimina un producto específico de la base de datos.
     */
    public function destroyProduct(Product $id)
    {

        $product = Product::find($id);

        // Elimina el producto especificado
        $product->delete();

        // Redirige a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Producto eliminado exitosamente.');
    }

    //funcion para mostrar index de usuario
    public function ProductUser()
    {
        return view('store.products');
    }
}



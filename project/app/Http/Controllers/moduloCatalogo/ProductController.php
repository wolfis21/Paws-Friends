<?php

namespace App\Http\Controllers\moduloCatalogo;

use App\Http\Controllers\Controller;
use App\Models\moduloCatalogo\Product;
use App\Models\moduloCatalogo\products_has_puntuation;
use App\Models\moduloCatalogo\Puntuations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function productAdmin()
    {
        // Recupera todos los productos de la base de datos
        $products = Product::all();
        // Retorna la vista 'index' con los productos
        return view('moduloCatalogo.products.admin.index', compact('products'));
    }

    /**
     * Muestra el formulario para crear un nuevo producto.
     */
    public function createProduct()
    {
        // Retorna la vista 'create' para crear un nuevo producto
        return view('moduloCatalogo.products.admin.create');
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
            'img_ref' => 'nullable',
            'product_category_animals_id' => 'nullable',
        ]);

        // Crea un nuevo producto con los datos validados
        Product::create($request->all());

        // Redirige a la lista de productos con un mensaje de éxito
        return redirect()->route('productAdmin');
    }

    /**
     * Muestra un producto específico.
     */
    public function showProduct(Product $id)
    {
        // Retorna la vista 'show' con el producto especificado
        $product = Product::find($id);
        return view('moduloCatalogo.products.admin.show', compact('product'));
    }

    /**
     * Muestra el formulario para editar un producto específico.
     */
    public function editProduct(Product $id)
    {
        // Retorna la vista 'edit' con el producto especificado
        $product = Product::find($id);
        return view('moduloCatalogo.products.admin.edit', compact('product'));
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
            'product_category_animals_id' => 'nullable',
        ]);

        $product = Product::find($id);

        // Actualiza el producto con los datos validados
        $product->update($request->all());

        // Redirige a la lista de productos con un mensaje de éxito
        return redirect()->route('productAdmin');
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
        return redirect()->route('productAdmin');
    }

    //funciones de user

    //funcion para mostrar index de usuario
    public function ProductUser()
    {
        return view('moduloCatalogo.products');
    }

    //funcion verificar puntuaciones
    public function verificarPuntuacionProduct($id)
    {
        $product = Product::find($id);
        $puntuacionExistente = products_has_puntuation::where('products_id', $product->id)->whereHas('puntuations', function ($query) {
            $query->where('users_id', Auth::user()->id);
        })
            ->first();
        return $puntuacionExistente;
    }

    public function updateProductPuntuations(Request $request, $id_product)
    {
        $product = Product::findOrFail($id_product);
        $productReq = $request->all();
        $puntuacionExistente = $this->verificarPuntuacionProduct($id_product);
        if ($puntuacionExistente) {
            $puntuacionExistente->puntuations()->updateOrCreate(
                ['users_id' => Auth::user()->id],
                ['puntuation' => $productReq['puntuation']]
            );
        } else {
            $puntuation = Puntuations::create([
                'puntuation' => $productReq['puntuation'],
                'users_id' => Auth::user()->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $puntuacionproduct = products_has_puntuation::create([
                'puntuations_id' => $puntuation->id,
                'products_id' => $product->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
        $product = Product::withAvg('puntuaciones', 'puntuation')->find($id_product);
        $promedioRedondeado = round($product->puntuaciones_avg_puntuation);
        $product->puntuation = $promedioRedondeado;
        $product->save();
        return redirect()->route('showProductUser', $id_product);
    }

}

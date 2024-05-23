<?php

namespace App\Http\Controllers\moduloCatalogo;

use App\Http\Controllers\Controller;
use App\Models\moduloCatalogo\categoryProductsAnimals;
use App\Models\moduloCatalogo\Product;
use App\Models\moduloCatalogo\products_has_puntuation;
use App\Models\moduloCatalogo\Puntuations;
use App\Models\moduloCatalogo\Shop;
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
        $shops = Shop::all();
        $categorys = categoryProductsAnimals::all();
        // Retorna la vista 'create' para crear un nuevo producto
        return view('moduloCatalogo.products.admin.create')->with('shops',$shops)
        ->with('categorys',$categorys);
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
            'shop_id' => 'required',
            'price'=>'nullable',
            'puntuation'=>'nullable',
        ]);

        $product = $request->all();

        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloCatalogo/images/products';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $product['img_ref'] = "$imageName";
        }

        // Crea un nuevo producto con los datos validados
        Product::create($product);

        // Redirige a la lista de productos con un mensaje de éxito
        return redirect()->route('productAdmin');
    }

    /**
     * Muestra un producto específico.
     */
    public function showProduct($id)
    {
        // Retorna la vista 'show' con el producto especificado
        $product = Product::find($id);
        return view('moduloCatalogo.products.admin.show')->with('product', $product);
    }

    /**
     * Muestra el formulario para editar un producto específico.
     */
    public function editProduct($id)
    {
        // Retorna la vista 'edit' con el producto especificado
        $product = Product::find($id);
        $categorys = categoryProductsAnimals::all();
        $shops = Shop::all();
        return view('moduloCatalogo.products.admin.edit')->with('product', $product)->with('categorys',$categorys)->with('shops',$shops);
    }

    /**
     * Actualiza un producto específico en la base de datos.
     */
    public function updateProduct(Request $request, $id)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'img_ref' => 'nullable',
            'product_category_animals_id' => 'nullable',
            'price'=>'nullable',
            'puntuation'=>'nullable',
        ]);

        $product = Product::findOrFail($id);

        $productReq = $request->all();

        if ($image = $request->file('img_ref')) {
            $path = 'storage/moduloCatalogo/images/products';
            $imageName = date('YmdHis') . "_" . $image->getClientOriginalExtension();
            $image->move($path, $imageName);
            $productsReq['img_ref'] = "$imageName";
        }else {
            unset($productReq['img_ref']);
        }

        // Actualiza el producto con los datos validados
        $product->update($productReq);

        // Redirige a la lista de productos con un mensaje de éxito
        return redirect()->route('productAdmin');
    }

    /**
     * Elimina un producto específico de la base de datos.
     */
    
    public function destroyProduct($id)
    {
        $product = Product::findOrFail($id);
        $path = public_path() . '/storage/moduloCatalogo/images/products/' . $product->img_ref;
        unlink($path);
        // Elimina el producto especificado
        $product->delete();

        // Redirige a la lista de productos con un mensaje de éxito
        return redirect()->route('productAdmin');
    }

    //todo funciones de user

    //funcion para mostrar index de usuario
    public function ProductUser()
    {
        $products = Product::all();
        return view('moduloCatalogo.products.user.productuser')
            ->with('products', $products);
    }


    //funcion verificar puntuaciones
    public function verificarPuntuacionProduct($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return null; // esto es temporal el no deberia ni de entrar en esto ya que se supone que todo los productos que esten clikeados visibles es porque estan registrados en la BD
        }
        $puntuacionExistente = products_has_puntuation::where('products_id', $product->id)->whereHas('puntuations', function ($query) {
            $query->where('users_id', Auth::user()->id);
        })
            ->first();
        return $puntuacionExistente;
    }

    public function showproductUser($id_product)
    {
        if (Auth::check()) {
            $product = Product::find($id_product);
            $verificarPuntajeUsuario = $this->verificarPuntuacionProduct($id_product);
            return view('moduloCatalogo.products.user.showProduct')->with('product', $product)
                ->with('verificarPuntajeUsuario', $verificarPuntajeUsuario);
        } else {
            return redirect()->route('login');
        }
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

    //todo categorias

    //todo perro
    public function categoryDog(){
        $products = Product::where('product_category_animals_id',1)->get();
        return view('moduloCatalogo.products.user.productCategory')
            ->with('products', $products);
    }

    //todo gatos
    public function categoryCat(){
        $products = Product::where('product_category_animals_id',2)->get();
        return view('moduloCatalogo.products.user.productCategory')
            ->with('products', $products);
    }
    //todo roedores
    public function categoryRodent(){
        $products = Product::where('product_category_animals_id',3)->get();
        return view('moduloCatalogo.products.user.productCategory')
            ->with('products', $products);
    }
    //todo aves
    public function categoryBirds(){
        $products = Product::where('product_category_animals_id',4)->get();
        return view('moduloCatalogo.products.user.productCategory')
            ->with('products', $products);
    }
    //todo peces
        public function categoryFish(){
        $products = Product::where('product_category_animals_id',5)->get();
        return view('moduloCatalogo.products.user.productCategory')
            ->with('products', $products);
    }
    //todo reptiles
    public function categoryReptile(){
        $products = Product::where('product_category_animals_id',6)->get();
        return view('moduloCatalogo.products.user.productCategory')
            ->with('products', $products);
    }
}

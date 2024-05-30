@extends('layouts.dashboard')
@section('title', 'Editar Producto')
@section('content')
<h1>Editar Producto</h1>
    <form method="POST" action="{{ route('updateProduct', $product->id) }}" role="form" enctype="multipart/form-data">  
        {{ method_field('PUT') }}
        @csrf

        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Ingrese el nombre" value="{{ $product->name }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripcion</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                placeholder="Ingrese la descripcion" value="{{ $product->description }}">
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Img" class="form-label">Img_ref</label>
            <input type="file" class="form-control @error('img_ref') is-invalid @enderror" id="img_ref" name="img_ref"
                value="{{ $product->img_ref }}" accept="image/*">
                @error('img_ref')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="product_category_animals_id" class="form-label">Categoria del producto</label>
            <select id="product_category_animals_id" name="product_category_animals_id" class="form-select">
                <option>Seleccione una categoria para el producto</option>
                @foreach ($categorys as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('product_category_animals_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="tienda">Tienda</label>
            <select name="shop_id" class="form-control" class="form-select" required>
                <option>Selecciona una tienda</option>
                @foreach ($shops as $shop)
                    <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                @endforeach
            </select>
            @error('shop_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" min="0" max="1000" step="0.01"
                value="{{ $product->price }}">
                @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <a class="btn bg-red" href="{{route('productAdmin')}}">Cancelar</a>
            <button class="btn bg-green">Guardar</button>
          </div>  
          
        
    </form>
@endsection
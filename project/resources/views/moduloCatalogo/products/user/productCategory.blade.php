@extends('layouts.headerNav')
@section('title', 'Categoria de perros')
@vite('css/moduloCatalogo/productCategory.css')
@section('content')
    <div class="contenedor-product">
        @foreach ($products as $product)
            <div class="product-card">
                <img class="img-product" src="storage/moduloCatalogo/images/products/{{ $product->img_ref }}" />
                <p>{{ $product->name }}</p>
                <p>{{ $product->description }}</p>
            </div>
        @endforeach
    </div>
@endsection

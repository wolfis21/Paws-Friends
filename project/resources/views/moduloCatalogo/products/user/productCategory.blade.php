@extends('layouts.headerNav')
@section('title', 'Categoria de perros')
@vite('css/moduloCatalogo/productCategoty.css')
@section('content')
    <div class="contenedor">
        @foreach ($product as $product)
            <div class="product-card">
                <img src="storage/moduloCatalogo/images/products/{{ $product->img_ref }}" />
                <p>{{ $product->name }}</p>
                <p>{{ $product->description }}</p>
            </div>
        @endforeach
    </div>
@endsection

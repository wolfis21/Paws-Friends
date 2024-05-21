@extends('layouts.headerNav')
@section('title', 'Categoria de perros')
@vite('resources/css/moduloCatalogo/productCategory.css')
@section('content')

<head>
<link href="https://fonts.googleapis.com/css2?family=Itim&family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>


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

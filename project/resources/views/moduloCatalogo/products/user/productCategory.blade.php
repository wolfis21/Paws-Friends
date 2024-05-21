@extends('layouts.headerNav')
@section('title','Categoria de perros')
@vite('css/moduloCatalogo/productCategoty.css')
@section('content')
    <div class="contenedor">
        <div class="product-card">
            @foreach ($products as $product)
                <img src="storage/moduloCatalogo/images/products/{{$product->img_ref}}"/>
                <p>{{$product->name}}</p>
                <p>{{$product->description}}</p>
            @endforeach
        </div>
    </div>
@endsection
@extends('layouts.headerNav')
@section('title', 'Categoria de perros')
@vite('resources/css/moduloCatalogo/productCategory.css')
@section('content')

<head>
<link href="https://fonts.googleapis.com/css2?family=Itim&family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>
<div class="contenedor-product">

    <div class="atras">  
    <a href="/products">atras</a>
    </div>
    
<section class="categorias">
        <h2 class="title-cat">Categorías</h2>
 
        <div class="mascotas">
        <div class="checkbox" alt="">   
            <a href="{{route('categoryDog')}}">
            <img src="https://static.miscota.com/media/1/assets/dog-icon.png">
            <t>Perros<t>
            </a>    
        </div>
        <div class="checkbox" alt=""> 
            <a href="{{route('categoryCat')}}">
            <img src="https://static.miscota.com/media/1/assets/cat-icon.png">
            <t>Gatos<t>
            </a>
        </div>
        <div class="checkbox" alt="">
            <a href="{{route('categoryRodent')}}">
            <img src="https://static.miscota.com/media/1/assets/rodent-icon.png">
            <t>Roedores<t>
            </a>
        </div>
        <div class="checkbox" alt=""> 
            <a href="{{route('categoryBirds')}}">  
            <img src="https://static.miscota.com/media/1/assets/bird-icon.png">
            <t>Aves<t>
            </a>
        </div>
        <div class="checkbox" alt="">
            <a href="{{route('categoryFish')}}">
            <img src="https://static.miscota.com/media/1/assets/fish-icon.png">
            <t>Peces<t>
            </a>
        </div>
        <div class="checkbox" alt=""> 
            <a href="{{route('categoryReptile')}}">
            <img src="https://static.miscota.com/media/1/assets/reptile-icon.png">
            <t>Reptiles<t>
            </a>
        </div>
    </div>  
    
<section>
    <h2 class="title-cat">Productos</h2>
    <div class ="product-card-container">
        @foreach ($products as $product)
        <a href="/Product/{{$product->id}}" style="color: black;">
            <div class="product-card">
                <img class="img-product" src="storage/moduloCatalogo/images/products/{{ $product->img_ref }}" />
                <p class = "name-product">{{ $product->name }}</p>
                <p class = "price-product">${{ $product->price }}</p>
            </div>
        @endforeach
    </div>
</section>



@endsection

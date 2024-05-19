@extends('layouts.headerNav')
@vite(['resources/css/moduloCatalogo/products-details.css'])
@section('content')
<head>
<link href="https://fonts.googleapis.com/css2?family=Itim&family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>

<section class="welcome">

<div>
    <img src="{{$product->img_ref}}" class="img" alt="">
    <img src="{{ asset('/css/moduloCatalogo/cosomorado.png') }}" class="img2" alt="">
</div>

<div class="main-view">

    <h1 class="title-page">{{$product->name}}</h1>
    <div>
        <p class="text-welcome">{{$product->description}}</p>

    <h2 class="caracteristics">Especificaciones del Producto</h2>

    <div class="contenedor">
    <div class="rectangulo">
      <p>${{$product->price}}</p>
    </div>
    <div class="rectangulo">
      <p>{{$product->product_category_animals_id}}</p>
</div>

  <h3 class="title-ubi">Ubicación del Producto</h3>
  <div class="ubication">
  <div class="rectangulo2">
  <img src="{{ asset('/css/moduloCatalogo/ubi.png') }}" class="img3" alt="">
      <g>{{$product->ubication}}</</g>
    </div>

    <h3 class="title-phone">Número de Contacto</h3>
  <div class="number">
  <div class="rectangulo3">
  <img src="{{ asset('/css/moduloCatalogo/phone.png') }}" class="img3" alt="">
      <g>{{$product->number}}</g>
    </div>
</section>
@endsection

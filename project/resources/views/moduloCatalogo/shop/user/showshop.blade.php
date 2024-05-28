@extends('layouts.headerNav')
@vite(['resources/css/moduloCatalogo/showShop.css'])
@section('content')

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Itim&family=League+Spartan:wght@100..900&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    </head>

    <section class="welcome"> 
<div>
    <img src="/storage/moduloCatalogo/images/shops/{{ $shop->img_ref }}" class="img" alt="">
    <img src="{{ asset('/css/moduloCatalogo/cosomorado.png') }}" class="img2" alt="">
</div>

<div class="main-view">

    <h1 class="title-page">{{$shop->name}}</h1>
    <div>
        <p class="text-welcome">{{$shop->address}}</p>


    <h2 class="title-link">Link de Referencia</h2>
    <div class="rectangulo">
    <img src="{{ asset('/css/moduloCatalogo/ig.png') }}" class="img3" alt="">
        <g>{{$shop->link_ref}}</g>
    </div>

    <h3 class="title-ubi">Ubicación del Producto</h3>
    <div class="ubication">
    <div class="rectangulo2">
    <img src="{{ asset('/css/moduloCatalogo/ubi.png') }}" class="img4" alt="">
        <g>{{$shop->address}}</</g>
    </div>

    <h3 class="title-phone">Número de Contacto</h3>
    <div class="number">
    <div class="rectangulo3">
    <img src="{{ asset('/css/moduloCatalogo/phone.png') }}" class="img5" alt="">
       <g>{{$shop->phone}}</g>
    </div>

    @if(!$verificarPuntajeUsuario)
    <h3 class="title-rating">Calificación</h3>
    <div class="estrellas">
        @include('layouts/stars/moduloCatalogo/starsShop')
    </div>
    @endif
</section>
@endsection

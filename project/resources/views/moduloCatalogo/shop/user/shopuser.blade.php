@extends('layouts.headerNav')
@vite(['resources/css/moduloCatalogo/shopUser.css'])
@section('content')

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Itim&family=League+Spartan:wght@100..900&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    </head>
<div class="contenedor">
    <section>
    <h2 class="title-shop">Tiendas</h2>
    <div class ="shop-card-container">
        @foreach ($shops as $shop)
        <a href="/Shop/{{$shop->id}}" style="color: black;">
            <div class="product-card">
                <img class="img-product" src="storage/moduloCatalogo/images/shops/{{ $shop->img_ref }}" />
                <p class = "name-shop">{{ $shop->name }}</p>
                <p class = "address-shop">{{ $shop->address }}</p>
            </div>
        @endforeach
    </section>
</div>
@endsection

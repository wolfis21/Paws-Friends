@extends('layouts.headerNav')
@vite(['resources/css/moduloCatalogo/shopUser.css'])
@section('content')

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <!-- CDN Botstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Itim&family=League+Spartan:wght@100..900&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    </head>
    <div class="contenedor">
        <section>
            <h2 class="title-shop">Tiendas</h2>
            <div class ="shop-card-container">
                @foreach ($shops as $shop)
                    <a href="/Shop/{{ $shop->id }}" style="color: black;">
                        <div class="product-card">
                            <img class="img-product" src="storage/moduloCatalogo/images/shops/{{ $shop->img_ref }}" />
                            <h5 class = "name-shop">{{ $shop->name }}</h5>
                            <p class = "address-shop">{{ $shop->address }}</p>
                            <div class="rating">
                                @for ($i = 0; $i < $shop->puntuation; $i++)
                                    <i class="bi bi-star-fill star"></i>
                                @endfor
                                @for ($i = 0; $i < 5 - $shop->puntuation; $i++)
                                    <i class="bi bi-star-fill star-o"></i>
                                @endfor
                            </div>
                        </div>
                @endforeach
        </section>
    </div>
@endsection

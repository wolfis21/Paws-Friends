@extends('layouts.headerNav')
@vite(['resources/css/moduloCatalogo/showProduct.css'])
@section('content')

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Itim&family=League+Spartan:wght@100..900&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    </head>

    <section class="welcome">

        <div>
            <img src="storage/moduloCatalogo/images/shops/{{ $shop->img_ref }}" class="img" alt="">
            <img src="{{ asset('/css/moduloCatalogo/cosomorado.png') }}" class="img2" alt="">
        </div>

        <div class="main-view">
            <h1 class="title-page">{{ $shop->name }}</h1>
            <div>
                <p class="text-welcome">{{ $shop->address }}</p>

                <div class="contenedor">
                    <div class="rectangulo">
                        <p>${{ $shop->phone }}</p>
                    </div>
                    <div class="rectangulo">
                        <p>{{ $shop->link_ref }}</p>
                    </div>
                    <div class="rectangulo">
                        <p>{{ $shop->puntation }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

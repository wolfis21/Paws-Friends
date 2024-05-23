@extends('layouts.headerNav')
@vite(['resources/css/moduloCatalogo/productuser.css'])
@section('content')

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Itim&family=League+Spartan:wght@100..900&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    </head>

    <section class="welcome">
        @foreach ($shops as $shop)
            <div class="product-card">
                <img class="img-product" src="storage/moduloCatalogo/images/shops/{{ $shop->img_ref }}" />
                <p>{{ $shop->name }}</p>
            </div>
        @endforeach
    </section>
@endsection

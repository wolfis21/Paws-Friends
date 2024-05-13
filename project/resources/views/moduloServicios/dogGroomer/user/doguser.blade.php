@extends('layouts.headerNav')
@section('title', 'DogGroomer')
@vite(['resources/css/moduloServicios/user/index.css', 'resources/css/moduloServicios/user/cards.css'])
@section('content')
    <div class="container-general">
        <h1 align="center">Peluqueria</h1>
        @foreach ($dogGroomers as $dogGroomers)
       
            <div class="cards">
                <a class="container-card" href="{{ route('showdogGroomerUser', $dogGroomers->id) }}">
                    <div class="img-container">
                        <img src="storage/moduloServicios/images/dogGroomers/{{ $dogGroomers->img_ref }}" alt="Imagen dog" />
                    </div>
                    <div class="info-container">
                        <h2>{{ $dogGroomers->name }}</h2>
                        <p>{{ $dogGroomers->specialist_animals }}</p>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
@endsection

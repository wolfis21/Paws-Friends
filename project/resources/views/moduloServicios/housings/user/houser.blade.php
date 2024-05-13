@extends('layouts.headerNav')
@section('title', 'Alojamientos')
@vite(['resources/css/moduloServicios/user/index.css', 'resources/css/moduloServicios/user/cards.css'])
@section('content')
    <div class="container-general">
        <h1 align="center">Alojamientos</h1>
        @foreach ($housings as $housings)
       
            <div class="cards">
                <a class="container-card" href="{{ route('showHousingsUser', $housings->id) }}">
                    <div class="img-container">
                        <img src="storage/moduloServicios/images/housings/{{ $housings->img_ref }}" alt="Imagen house" />
                    </div>
                    <div class="info-container">
                        <h2>{{ $housings->name }}</h2>
                        <p>{{ $housings->specialist_animals }}</p>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
@endsection

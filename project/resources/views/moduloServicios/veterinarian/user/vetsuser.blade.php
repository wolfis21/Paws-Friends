@extends('layouts.headerNav')
@section('title', 'Veterinarios')
@vite(['resources/css/moduloServicios/user/indexServices.css'])
@section('content')
    <div class="container-title">
        <h1 class="title">Veterinarios</h1>
    </div>
    <div class="container-service">
        <div class="container-back">
            @foreach ($veterinarians as $veterinarian)
                <div class="cards">
                    <a class="container-card" href="{{ route('showVeterinarianUser', $veterinarian->id) }}">
                        <div class="img-container">
                            <img src="/storage/moduloServicios/images/vets/{{ $veterinarian->img_ref }}" alt="Imagen vet" />
                        </div>
                        <div class="info-container">
                            <h2>{{ $veterinarian->name }}</h2>
                            <p>{{ $veterinarian->specialist_animals }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="container-aside">
            <H2>BUSCADOR</H2>
        </div>
    </div>
@endsection

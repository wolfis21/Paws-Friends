<!-- CDN Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<!-- CDN Botstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Mis Estilos CSS -->
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
                            <h5>{{ $veterinarian->name }}</h5>
                            <p>{{ $veterinarian->specialist_animals }}</p>
                            <div class="rating">
                                @for ($i = 0; $i < $veterinarian->puntuation; $i++)
                                    <i class="bi bi-star-fill star"></i>
                                @endfor
                                @for ($i = 0; $i < 5 - $veterinarian->puntuation; $i++)
                                    <i class="bi bi-star-fill star-o"></i>
                                @endfor
                            </div>
                            
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="container-aside">
            <div class="buscador">
                <H2>BUSCADOR</H2>
            </div>
        </div>
    </div>
@endsection

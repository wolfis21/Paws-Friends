@extends('layouts.headerNav')
@section('title', 'Adopciones')
@vite('resources/css/moduloAdopcionesDonaciones/adopciones.css')
@section('content')
    <div class="container-main">
        <div class="title-container">
            <h1 class="title">Adopciones</h1>
        </div>
        <div class="buscador">
            <input type="text" id="nombreMascota" placeholder="Buscar mascota..." />
        </div>
        <section class="container-adopciones">
            @foreach ($adopciones as $adopcion)
                @if ($adopcion->status === 'Sin solicitud / Sin adoptar')
                    <a href="{{ route('showAdoptions', $adopcion->id) }}" class="animal">
                        <img class="img-adoption" src="{{ asset('img/Animales/gato1.jpeg') }}" alt="Gato">
                        <h5>{{ $adopcion->name }}</h5>
                        <p class="texto">Raza: {{ $adopcion->animal_race }}</p>
                        <p class="textosin">Edad: {{ $adopcion->age_animal }}</p>
                    </a>
                @else
                    <h2>No hay adopciones disponibles</h2>
                @endif
            @endforeach
        </section>
    </div>
@endsection

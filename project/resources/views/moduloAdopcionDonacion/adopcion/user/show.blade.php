@extends('layouts.headerNav')
@section('title', 'Adopciones')
@vite('resources/css/moduloAdopcionesDonaciones/showAdopciones.css')
@section('content')
    <div class="container-main">
        <div class="img-container">
            <a class="link-botton" href="{{ route('indexAdoptions') }}">Volver</a>
            <img src="{{ asset('img/Animales/gato1.jpeg') }}" alt="Adopciones" class="img-adopcion">
        </div>
        <div class="view-container">
            <h1 class="nombre">{{ $adopcion->name }}</h1>
            <div class="container-texto">
                <p class="texto">Raza: </p>
                {{ $adopcion->animal_race }}
            </div>
            <div class="container-texto">
                <p class="texto">Edad: </p>
                {{ $adopcion->age_animal }}
            </div>
            <div class="container-texto">
                <p class="texto">Sexo: </p>
                {{ $adopcion->sex_animal }}
            </div>
            <div class="container-texto">
                <p class="texto">Descripción:</p>
                {{ $adopcion->description_animals }}
            </div>
            <div class="container-texto">
                <p class="texto">Estado: </p>
                {{ $adopcion->status }}
            </div>
            <div class="container-texto">
                <p class="texto textosin">Dirección: </p>
                {{ $adopcion->location_address }}
            </div>
            <form class="container-button" action="{{route('solicitarAdopcion', $adopciones->id)}}" method="POST" role="form" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf
              <button class="btnS">Solicitar adopcion</button>
            </form>
        </div>
    </div>
@endsection

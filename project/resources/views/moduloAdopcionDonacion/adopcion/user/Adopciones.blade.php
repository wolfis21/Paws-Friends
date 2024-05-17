@extends('layouts.headerNav')
@section('title','Adopciones')
@vite('resources/css/moduloAdopcionesDonaciones/adopciones.css')
@section('content')
  <div class="container-main">
    <div class="title-container">
      <h1 class="title">Adopciones</h1>
    </div>
    <div class="buscador">
      <input type="text" id="nombreMascota" placeholder="Buscar mascota..."  />
    </div>
    <section class="container-adopciones">
      @foreach ($adopciones as $adopcion)
        <a href="{{route('showAdoptions', $adopcion->id)}}" class="animal">
          <img class="img-adoption" src="{{ asset ( 'img/Animales/gato1.jpeg')}}" alt="Gato">
          <h2>{{$adopcion->name}}</h2>
          <p>Raza: {{$adopcion->animal_race}}</p>
          <p>Edad: {{$adopcion->age_animal}}</p>
        </a>
      @endforeach
    </section>
  </div>
@endsection
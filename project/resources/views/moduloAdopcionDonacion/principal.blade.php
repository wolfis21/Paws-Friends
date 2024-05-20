@extends('layouts.headerNav')
@section('title', 'Adopciones & Donaciones')
@vite('resources/css/moduloAdopcionesDonaciones/index.css')
@section('content')
    <div class="container-welcome">
        <div class="img">
            <img src="{{ asset('css/moduloAdopcionDonacion/mascota.png') }}" alt="Perro">
        </div>
        <div class="container-title-adop">
            <h1 class="title">Bienvenido a Adopciones y Donaciones</h1>
            <div class="container-text">
                <p>Nuestro sitio se dedica a conectar personas interesadas en adoptar mascotas y organizaciones que
                    promueven la adopción y el cuidado de animales. Ofrecemos información sobre mascotas disponibles,
                    eventos de adopción y facilitamos donaciones para apoyar a refugios y centros de adopción.</p>
            </div>
            <div class="container-link">
                <a class="link-button" href="/adoptar/formulario"> Adopte AQUI</a>
                <a class="link-button" href="/donar/formulario">Done AQUI</a>
            </div>
        </div>
    </div>
@endsection

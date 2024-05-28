@extends('layouts.headerNav')
@section('title', 'Adopciones & Donaciones')
@vite('resources/css/moduloAdopcionesDonaciones/index.css')
@vite(['resources/css/theme.css'])
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
    <section class="developer">
        <h2 class="texto texto-program">Desarrolladores</h2>
        <div class="cartas">
            <div class="carta">
                <img class="img-dev" src="{{ asset('img/devs/des-defaulf.jpg') }}" alt="">
                <div class="contenido-texto-card">
                    <h4 class="nombre-Program">Maria Romero</h4>
                    <p><b>Lider</b></p>
                </div>
            </div>
            <div class="carta">
                <img class="img-dev" src="{{ asset('img/devs/des-defaulf.jpg') }}" alt="">
                <div class="contenido-texto-card">
                    <h4 class="nombre-Program">Henry Barreto</h4>
                    <p><b>FRONT-END</b></p>
                </div>
            </div>
            <div class="carta">
                <img class="img-dev" src="{{ asset('img/devs/des-defaulf.jpg') }}" alt="">
                <div class="contenido-texto-card">
                    <h4 class="nombre-Program">Orlando Guerra</h4>
                    <p><b>BACK-END</b></p>
                </div>
            </div>
            <div class="carta">
                <img class="img-dev" src="{{ asset('img/devs/des-defaulf.jpg') }}" alt="">
                <div class="contenido-texto-card">
                    <h4 class="nombre-Program">Anthony Mansilla</h4>
                    <p><b>FRONT-END</b></p>
                </div>
            </div>

        </div>

    </section>
@endsection

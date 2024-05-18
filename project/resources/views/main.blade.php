@extends('layouts.headerNav')
@vite('resources/css/login/loginUser.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
@section('content')
    <div id="ShowcaseMain">
        <div>
            <a class="btn-main" href="#">Mas Informacion</a>
        </div>
    </div>
    <div id="ShowcaseServicios" class="services-box">

        <div class="contenedorModulos">
            <a href="{{ route('serviceModel') }}">
                <img class="iconosModulos" id="cuidado" src="{{ URL::asset('imagenes/FRAMES/FRAME B/1.png') }}"
                    alt="Cuidados">
            </a>
        </div>

        <div class="contenedorModulos">
            <a href="#">
                <img class="iconosModulos" id="donaciones" src="{{ URL::asset('imagenes/FRAMES/FRAME B/2.png') }}"
                    alt="Donaciones y Adopciones">
            </a>
        </div>

        <div class="contenedorModulos">
                <a href="{{ route('servicios') }}"> 
                <img class="iconosModulos" id="rescates" src="{{ URL::asset('imagenes/FRAMES/FRAME B/3.png') }}"
                    alt="Rescates">
            </a>
        </div>

        <div class="contenedorModulos">
            <a href="#">
                <img class="iconosModulos" id="tienda" src="{{ URL::asset('imagenes/FRAMES/FRAME B/4.png') }}"
                    alt="Catalogo">
            </a>
        </div>


    </div>

    <div id="ShowcaseQuienes">
        <p id="txt-quienes">Paws & Friends es una organizacion comprometida con el bienestar de las mascotas, ofreciendo una
            amplia gama de servicos para satisfacer
            todas las necesidades de tus peludos.
        </p>
    </div>

    <div id="ShowcaseEquipo">

        <div id="txt-vet">
            <p>
                Nuestro equipo de profesionales altamente capacitados y amantes de los animales se dedica a proporcionar
                atencion medica
                veterinaria de calidad y alojamiento seguro.
            </p>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
            </ol>
            <div class="carousel-inner custom">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ URL::asset('imagenes/FRAMES/FRAME D/vet 1.png') }}"
                        alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ URL::asset('imagenes/FRAMES/FRAME D/vet 2.png') }}"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ URL::asset('imagenes/FRAMES/FRAME D/vet 3.png') }}"
                        alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ URL::asset('imagenes/FRAMES/FRAME D/vet 4.png') }}"
                        alt="Third slide">
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span> {{-- yo esto lo quitaria --}}
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
            </div>
        </div>

    </div>

    <div id="ShowcaseContacto">

    </div>
@endsection

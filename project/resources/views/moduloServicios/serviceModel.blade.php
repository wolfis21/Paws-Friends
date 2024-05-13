@extends('layouts.headerNav')
@section('title', 'Modulo de servicio')
@vite(['resources/css/moduloServicios/user/index.css'])
@section('content')
    <div class="contenedor">
        <section class="welcome">

            <div class="img">
                <img src="{{ asset('css/moduloServicios/user/pngegg.webp') }}">
            </div>
            <div class="main-view">

                <h1 class="title-page">Bienvenido a Servicios</h1>
                <div class="texto-bienvenida">
                    <p>En este módulo de cuidados, se brinda una amplia gama de servicios para mascotas, que incluyen
                        cuidados, alojamiento, atención veterinaria y servicios de peluquería. Cada uno de estos servicios
                        se detalla en secciones individuales, ofreciendo información específica y detallada para garantizar
                        el bienestar y la salud óptima de las mascotas atendidas.</p>
                </div>
            </div>
        </section>

        <section class="module">
            <h2 class="texto">Nuestros servicios</h2>
            <div class="cards">
                <div class="card-img2">
                    <a href="{{ route('Veterinario') }}">
                        <img src="https://images.pexels.com/photos/6235225/pexels-photo-6235225.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                        <div class="pservicio">Veterinarios</div>
                    </a>
                </div>
                <div class="card-img2">
                    <a href="{{ route('housingUser') }}">
                        <img
                            src="https://images.unsplash.com/photo-1535126320463-c5c1b26b3e66?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                        <div class="pservicio">Alojamiento</div>
                    </a>
                </div>
                <div class="card-img2">
                    <a href="{{ route('dogGroomerUser') }}">
                        <img
                            src="https://plus.unsplash.com/premium_photo-1664297694687-570b7f392906?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                        <div class="pservicio">Peluqueria</div>
                    </a>
                </div>
            </div>
        </section>
        <section class="developer">
            <h2 class="texto texto-program">Desarrolladores</h2>
            <div class="cartas">
                <div class="carta">
                    <img class="img-dev" src="{{ asset('css/moduloServicios/user/lopez.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4 class="nombre-Program">Anibal Lopez</h4>
                        <p><b>BACK-END</b></p>
                    </div>
                </div>
                <div class="carta">
                    <img class="img-dev" src="{{ asset('css/moduloServicios/user/tussi.png') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4 class="nombre-Program">Jesus Toussaint</h4>
                        <p><b>BACK-END</b></p>
                    </div>
                </div>
                <div class="carta">
                    <img class="img-dev" src="{{ asset('css/moduloServicios/user/romero.webp') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4 class="nombre-Program">Daniel Romero</h4>
                        <p><b>FRONT-END</b></p>
                    </div>
                </div>
                <div class="carta">
                    <img class="img-dev" src="{{ asset('css/moduloServicios/user/rebe.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4 class="nombre-Program">Yannella Saud</h4>
                        <p><b>FRONT-END</b></p>
                    </div>
                </div>

            </div>

        </section>
    </div>
@endsection

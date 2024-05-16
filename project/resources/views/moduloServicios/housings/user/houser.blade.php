@extends('layouts.headerNav')
@section('title', 'Alojamientos')
@vite(['resources/css/moduloServicios/user/indexServices.css'])
@section('content')
    <!-- CDN Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- CDN Botstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Mis Estilos CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui-1.13.3/jquery-ui.min.css') }}">

    <div id="section-title">
        <a class="link-hover" href="{{route('Veterinario')}}">Veterinarios</a>
        <h1 class="title">Alojamiento</h1>
        <a class="link-hover" href="{{route('dogGroomerUser')}}">Peluquerias</a>
    </div>
    <div class="container-service">
        <div class="container-back">
            <div class="container-back view">
                @foreach ($housings as $housing)
                    <div class="cards">
                        <a class="container-card" href="{{ route('showHousingUser', $housing->id) }}">
                            <div class="img-container">
                                <img src="{{ asset('storage/moduloServicios/images/housings/' . $housing->img_ref) }}"
                                    alt="Imagen housing" />
                            </div>
                            <div class="info-container">
                                <h5>
                                    @if (strlen($housing->name) >= 17)
                                        @php
                                            $parts = explode(' ', $housing->name, 2);
                                            $firstPart = $parts[0];
                                            $secondPart = isset($parts[1]) ? $parts[1] : '';
                                            $firstLetter = strtoupper(substr($secondPart, 0, 1));
                                            $result = $firstPart . ' ' . $firstLetter;
                                        @endphp
                                        {{ $result }}
                                    @else
                                        {{ $housing->name }}
                                    @endif
                                </h5>
                                <div class="rating">
                                    @for ($i = 0; $i < $housing->puntuation; $i++)
                                        <i class="bi bi-star-fill star"></i>
                                    @endfor
                                    @for ($i = 0; $i < 5 - $housing->puntuation; $i++)
                                        <i class="bi bi-star-fill star-o"></i>
                                    @endfor
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container-aside">
            <div class="form-input">
                <div class="search">
                    <input id="buscador-input" type="text" name="searchVets" placeholder="Buscar alojamiento" />
                </div>
                <div id="results">

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/moduloServicios/user/buscadorHousings.js') }}"></script>

@endsection

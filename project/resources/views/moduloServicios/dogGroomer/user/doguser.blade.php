@extends('layouts.headerNav')
@section('title', 'Peluquerias')
@vite(['resources/css/moduloServicios/user/indexServices.css'])
@section('content')
    <!-- CDN Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- CDN Botstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Mis Estilos CSS -->
    <div id="section-title">
        <a class="link-hover" href="{{route('housingUser')}}">Alojamientos</a>
        <h1 class="title">Peluquerias</h1>
        <a class="link-hover" href="{{route('Veterinario')}}">Veterinarios</a>
    </div>
    <div class="container-service">
        <div class="container-back">
            <div class="container-back view">
                @foreach ($dogGroomers as $dogGroomer)
                    <div class="cards">
                        <a class="container-card" href="{{ route('showDogGroomerUser', $dogGroomer->id) }}">
                            <div class="img-container">
                                <img src="{{ asset('storage/moduloServicios/images/dogGroomers/'. $dogGroomer->img_ref) }}"
                                    alt="Imagen dogGroomer" />
                            </div>
                            <div class="info-container">
                                <h5>
                                    @if (strlen($dogGroomer->name) >= 17)
                                        @php
                                            $parts = explode(' ', $dogGroomer->name, 2);
                                            $firstPart = $parts[0];
                                            $secondPart = isset($parts[1]) ? $parts[1] : '';
                                            $firstLetter = strtoupper(substr($secondPart, 0, 1));
                                            $result = $firstPart . ' ' . $firstLetter;
                                        @endphp
                                        {{ $result }}
                                    @else
                                        {{ $dogGroomer->name }}
                                    @endif
                                </h5>
                                <div class="rating">
                                    @for ($i = 0; $i < $dogGroomer->puntuation; $i++)
                                        <i class="bi bi-star-fill star"></i>
                                    @endfor
                                    @for ($i = 0; $i < 5 - $dogGroomer->puntuation; $i++)
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
                    <input id="buscador-input" type="text" name="searchDG" placeholder="Buscar Peluqueria" />
                </div>
                <div id="results">

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/moduloServicios/user/buscadordogGroomer.js') }}"></script>

@endsection

@extends('layouts.headerNav')
@section('title', 'Veterinarios')
@vite(['resources/css/moduloServicios/user/indexServices.css'])
@section('content')
    <!-- CDN Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- CDN Botstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Mis Estilos CSS -->
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
                            <!-- Verifica la longitud del nombre y muestra la primera letra de la segunda palabra en mayúsculas si es necesario -->
                            <h5>
                                @if (strlen($veterinarian->name) >= 17)
                                    @php
                                        // Divide el nombre del veterinario en dos partes basándose en el espacio como delimitador.
                                        // El segundo argumento '2' indica que queremos dividir el nombre en un máximo de dos partes.
                                        $parts = explode(' ', $veterinarian->name, 2);

                                        // Asigna la primera parte del nombre (la primera palabra) a la variable $firstPart.
                                        $firstPart = $parts[0];

                                        // Verifica si existe una segunda parte en el array $parts (es decir, si el nombre fue dividido en dos partes).
                                        // Si existe, asigna la segunda parte del nombre a la variable $secondPart.
                                        // Si no existe (por ejemplo, si el nombre no tenía espacios), asigna una cadena vacía a $secondPart.
                                        $secondPart = isset($parts[1]) ? $parts[1] : '';

                                        // Obtiene la primera letra de $secondPart (la segunda palabra del nombre, si existe).
                                        // Luego, convierte esa letra a mayúsculas usando la función strtoupper().
                                        $firstLetter = strtoupper(substr($secondPart, 0, 1));

                                        // Concatena $firstPart (la primera palabra del nombre) con un espacio y la primera letra de la segunda palabra (convertida a mayúsculas).
                                        // Esto forma la cadena $result, que representa el nombre modificado según las reglas especificadas.
                                        $result = $firstPart . ' ' . $firstLetter;
                                    @endphp
                                    {{ $result }}
                                @else
                                    {{ $veterinarian->name }}
                                @endif
                            </h5>
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

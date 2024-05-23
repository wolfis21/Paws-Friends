@php
    $true = false
@endphp

@extends('layouts.headerNav')
@section('title', 'Adopciones')
@vite('resources/css/moduloAdopcionesDonaciones/adopciones.css')
@section('content')
    <div class="container-main" id="container-adopciones">
        <div class="title-container">
            <h1 class="title">Adopciones</h1>
            <a class="link-hover" href="{{route('indexDonations')}}">Donaciones</a>
        </div>
        <div class="buscador">
            <input type="text" id="nombreMascota" placeholder="Buscar mascota..." />
        </div>
        <section class="container-adopciones">
            @foreach ($adopciones as $adopcion)
                @if ($adopcion->status === 'Sin solicitud / Sin adoptar')
                    <a href="{{ route('showAdoptions', $adopcion->id) }}" class="animal">
                        <img class="img-adoption" src="{{ asset('/storage/moduloAdopcion/images/'.$adopcion->photo_animal) }}">
                        <h5>{{ $adopcion->name }}</h5>
                        <p class="texto">Raza: {{ $adopcion->animal_race }}</p>
                        <p class="textosin">Edad: {{ $adopcion->age_animal }}</p>
                    </a>
                @php
                    $true = true
                @endphp
                @endif
                @endforeach
                @if($true == false)
                    <h2>No hay adopciones disponibles</h2>
                @endif
        </section>
        @if ($true !== true)
        <section class="container-table">
            <div class="rounded-container"> <!-- Contenedor con bordes redondeados -->
                <table class="tablehistorial">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Usuario</th>
                            <th>Mascota</th>
                            <th>Especie</th>
                            <th>Raza</th>
                            <th>Sexo</th>
                            <th>Edad</th>
                            <th>Estado adopcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($adopciones as $adopcion)
                            @if (($adopcion->status !== 'Sin solicitud / Sin adoptar') && ($adopcion->users_id !== null))
                                <tr>
                                    <td>{{ $adopcion->id }}</td>
                                    <td>{{ $adopcion->users->name }}</td>
                                    <td><img class="img-historial" src="{{ asset('/storage/moduloAdopcion/images/'.$adopcion->photo_animal) }}">
                                    </td>
                                    <td>{{ $adopcion->species }}</td>
                                    <td>{{ $adopcion->animal_race }}</td>
                                    <td>{{ $adopcion->sex_animal }}</td> <!-- Movido al lado de Edad -->
                                    <td>{{ $adopcion->age_animal }}</td> <!-- Movido después de Motivo -->
                                    <td>{{ $adopcion->status }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        @endif
    </div>
@endsection

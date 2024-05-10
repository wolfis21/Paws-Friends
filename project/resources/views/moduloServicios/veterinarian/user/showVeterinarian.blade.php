@extends('layouts.headerNav')
@section('title', 'Vet')
@vite('resources/css/moduloServicios/user/showServices.css')
@section('content')
    <div class="container-general">
        <div class="img-container">
            <img src="/storage/moduloServicios/images/vets/{{ $veterinarian->img_ref }}" alt="Imagen vet" />
        </div>
        <div class="info-container">
            <div class="name-container">
                <h1 class="title">Dr. {{ $veterinarian->name }}</h1>
            </div>
            <div class="especialidad-container"><p class="texto">Especialidad: </p><h4 class="especialidad">{{ $veterinarian->specialist_animals }}</h4></div>
            <h2>Información de Contacto</h2>
            <div><p class="texto">Ubicación:</p> {{ $veterinarian->address }}</div>
            <div><p class="texto">Email:</p> {{ $veterinarian->email }}</div>
            <div><p class="texto">Telefono:</p> {{ $veterinarian->phone }}</div>
            <a href="{{ $veterinarian->link_ref }}">Link: {{ $veterinarian->link_ref }}</a>
            @if (!$verificarPuntajeUsuario)   
                <div class="start">
                    @include('layouts/stars/stars')
                </div>
            @endif
        </div>
        <div class="container-comments">
            @include('moduloServicios/comments')
        </div>
    </div>
@endsection

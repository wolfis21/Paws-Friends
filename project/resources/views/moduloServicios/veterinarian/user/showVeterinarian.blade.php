@extends('layouts.headerNav')
@section('title', 'Vet')
@vite('resources/css/moduloServicios/user/showServices.css')
@section('content')
    <div class="container-general">
        <div class="img-container">
            <a href="{{route('Veterinario')}}">Volver</a>
            <img src="/storage/moduloServicios/images/vets/{{ $veterinarian->img_ref }}" alt="Imagen vet" />
        </div>
        <div class="info-container">
            <div class="name-container">
                <h1 class="title">Dr. {{ $veterinarian->name }}</h1>
            </div>
            <div class="especialidad-container">
                <p class="especialidad-texto">Especialidad: </p>
                <h6 class="especialidad">{{ $veterinarian->specialist_animals }}</h6>
            </div>
            <h2>Información de Contacto</h2>
            <div>
                <p class="texto">Ubicación:</p> {{ $veterinarian->address }}
            </div>
            <div>
                <p class="texto">Email:</p> {{ $veterinarian->email }}
            </div>
            <div>
                <p class="texto">Telefono:</p> {{ $veterinarian->phone }}
            </div>
            <a href="{{ $veterinarian->link_ref }}">Link: {{ $veterinarian->link_ref }}</a>
            @if (!$verificarPuntajeUsuario)
                <div class="estrellas">
                    @include('layouts/stars/stars')
                </div>
            @endif
        </div>
    </div>
    @vite('resources/css/moduloServicios/user/comments.css')
    <div class="container-comments">
        {{-- @include('moduloServicios/comments') --}}
        <div class="title-comments">
            <h4>Comentarios</h4>
        </div>
        <div class="other-comments">
            @foreach ($veterinariansComments as $veterinariansComment)
                @if ($veterinariansComment->comments->accepted === 1)
                    <div class="container-other-comments">
                        <p class="container-user">{{ $veterinariansComment->comments->users->name }}: </p>
                        <p class="container-comment">{{ $veterinariansComment->comments->data_text }}</p>
                    </div>
                @endif
            @endforeach
        </div>
        <form class="user" method="POST" action="{{route('enviarComentario', $veterinarian->id)}}" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            @csrf
            <div class="user-label">
                <label for="user">{{ Auth::user()->name }}</label>
            </div>
            <div class="input-button">
                <textarea class="comments-user" name="comments" id="comments" placeholder="Ingrese un comentario"></textarea>
            </div>
            <button class="btn-enviar" type="submit" value="Enviar">Enviar</button>
        </form>
    </div>
@endsection

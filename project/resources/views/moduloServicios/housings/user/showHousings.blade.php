@extends('layouts.headerNav')
@section('title', 'Alojamiento')
@vite('resources/css/moduloServicios/user/showServices.css')
@section('content')
    <div class="container-general">
        <div class="img-container">
            <a class="link-hover" href="{{route('housingUser')}}">Volver</a>
            <img src="{{ asset('storage/moduloServicios/images/housings/'. $housing->img_ref) }}" alt="Imagen Housing" />
        </div>
        <div class="info-container">
            <div class="name-container">
                <h1 class="title">Aloj. {{ $housing->name }}</h1>
            </div>
            <h2>Información de Contacto</h2>
            <div>
                <p class="texto">Ubicación:</p> {{ $housing->address }}
            </div>
            <div>
                <p class="texto">Telefono:</p> {{ $housing->phone }}
            </div>
            <div>
                <p class="texto">Descripcion:</p> {{$housing->description_location}}
            </div>
            <div>
                <p class="texto">Tipo de animal:</p> {{$housing->type_animals}}
            </div>
            <div>
                <p class="texto">Ofertas de comida:</p> {{$housing->food_offer}}
            </div>
            @if (!$verificarPuntajeUsuario)
                <div class="estrellas">
                    @include('layouts/stars/modeloServicios/starsHousing')
                </div>
            @endif
        </div>
    </div>
    @vite('resources/css/moduloServicios/user/comments.css')
    <div class="container-comments">
        <div class="title-comments">
            <h4>Comentarios</h4>
        </div>
        <div class="other-comments">
            @foreach ($housingsComments as $housingsComment)
                @if ($housingsComment->comments->accepted === 1)
                    <div class="container-other-comments">
                        <p class="container-user">{{ $housingsComment->comments->users->name }}: </p>
                        <p class="container-comment">{{ $housingsComment->comments->data_text }}</p>
                    </div>
                @endif
            @endforeach
        </div>
        <form class="user" method="POST" action="{{route('enviarComentarioHousing', $housing->id)}}" enctype="multipart/form-data">
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

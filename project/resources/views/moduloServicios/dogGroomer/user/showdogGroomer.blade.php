@extends('layouts.headerNav')
@section('title', 'DogGroomer')
@vite('resources/css/moduloServicios/user/showServices.css')
@section('content')
    <div class="container-general">
        <div class="img-container">
            <a href="{{route('dogGroomerUser')}}">Volver</a>
            <img src="{{asset('storage/moduloServicios/images/dogGroomers/'. $dogGroomer->img_ref)}}" alt="Imagen dog" />
        </div>
        <div class="info-container">
            <div class="name-container">
                <h1 class="title">Pelu. {{ $dogGroomer->name }}</h1>
            </div>
            <h2>Información de Contacto</h2>
            <div>
                <p class="texto">Ubicación:</p> {{ $dogGroomer->address }}
            </div>
            <div>
                <p class="texto">Telefono:</p> {{ $dogGroomer->phone }}
            </div>
            <a href="{{ $dogGroomer->link_ref }}">Link: {{ $dogGroomer->link_ref }}</a>
            @if (!$verificarPuntajeUsuario)
                <div class="estrellas">
                    @include('layouts/stars/modeloServicios/starsDogGroomer')
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
            @foreach ($dogGroomersComments as $dogGroomersComment)
                @if ($dogGroomersComment->comments->accepted === 1)
                    <div class="container-other-comments">
                        <p class="container-user">{{ $dogGroomersComment->comments->users->name }}: </p>
                        <p class="container-comment">{{ $dogGroomersComment->comments->data_text }}</p>
                    </div>
                @endif
            @endforeach
        </div>
        <form class="user" method="POST" action="{{route('enviarComentarioDogGroomer', $dogGroomer->id)}}" enctype="multipart/form-data">
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

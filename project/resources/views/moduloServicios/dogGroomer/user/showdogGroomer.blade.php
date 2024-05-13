@extends('layouts.headerNav')
@section('title', 'DogGroomer')
@vite(['resources/css/moduloServicios/user/index.css', 'resources/css/moduloServicios/user/show.css'])
@section('content')

        <div class="container-general">
            <div class="img-container">
                <img src="/storage/moduloServicios/images/dogGroomers/{{ $dogGroomers->img_ref }}" alt="Imagen dog" />
                <div class="name-container">
                    <h1>Peluqueria {{$dogGroomers->name}}</h1> 
                </div>
                <div class="especialidad-container">{{$dogGroomers->specialist_animals}}</div> 
            </div>
            <div class="info-container">
                <h1>Información de Contacto</h1>
                <br/>
                <div>Ubicación: {{$dogGroomers->address}}</div>
                <div>Email: {{$dogGroomers->email}}</div>
                <div>Telefono: {{$dogGroomers->phone}}</div>
                <a href="{{$dogGroomers->link_ref}}">Link: {{$dogGroomers->link_ref}}</a>
            </div>


        </div>
@endsection
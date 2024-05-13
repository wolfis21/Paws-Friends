@extends('layouts.headerNav')
@section('title', 'Vet')
@vite(['resources/css/moduloServicios/user/index.css', 'resources/css/moduloServicios/user/show.css'])
@section('content')

        <div class="container-general">
            <div class="img-container">
                <img src="storage/moduloServicios/images/housings/{{ $housings->img_ref }}" alt="Imagen house" />
                <div class="name-container">
                    <h1>Hogar {{$housings->name}}</h1> 
                </div>
                <div class="especialidad-container">{{$housings->specialist_animals}}</div> 
            </div>
            <div class="info-container">
                <h1>Información de Contacto</h1>
                <br/>
                <div>Ubicación: {{$housings->address}}</div>
                <div>Email: {{$$housings->email}}</div>
                <div>Telefono: {{$housings->phone}}</div>
                <a href="{{$housings->link_ref}}">Link: {{$housings->link_ref}}</a>
            </div>


        </div>
@endsection
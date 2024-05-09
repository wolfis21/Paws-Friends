@extends('layouts.headerNav')
@section('title', 'Vet')
@vite('resources/css/moduloServicios/user/showServices.css')
@section('content')

        <div class="container-general">
            <div class="img-container">
                <img src="/storage/moduloServicios/images/vets/{{ $veterinarian->img_ref }}" alt="Imagen vet" />
                <div class="name-container">
                    <h1>Dr. {{$veterinarian->name}}</h1> 
                </div>
                <div class="especialidad-container">{{$veterinarian->specialist_animals}}</div> 
            </div>
            <div class="info-container">
                <h1>Información de Contacto</h1>
                <br/>
                <div>Ubicación: {{$veterinarian->address}}</div>
                <div>Email: {{$veterinarian->email}}</div>
                <div>Telefono: {{$veterinarian->phone}}</div>
                <a href="{{$veterinarian->link_ref}}">Link: {{$veterinarian->link_ref}}</a>
            </div>


        </div>
@endsection
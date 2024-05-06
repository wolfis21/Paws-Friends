@extends('layouts.navMenu')
@section('title', 'Vet')
@vite(['resources/css/moduloServicios/user/index.css', 'resources/css/moduloServicios/user/show.css'])
@section('content')

        <div class="container-general">
            <div class="img-container">
                <img src="/admin/images/vets/{{$veterinarian->img_ref}}" alt="img-vet"  />
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
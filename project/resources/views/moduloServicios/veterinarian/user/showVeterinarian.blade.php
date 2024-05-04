@extends('layouts.navMenu')
@section('title', 'Vet')
@vite(['resources/css/moduloServicios/user/index.css', 'resources/css/moduloServicios/user/cards.css'])
@section('content')
    <h1>Veterinarios</h1>

        <div class="container-general">
                
                    <div class="img-container">
                        <img src="/admin/images/vets/{{$veterinarian->img_ref}}" alt="img-vet" />
                    </div>
                    <h1>{{$veterinarian->name}}</h1>  
        </div>
@endsection
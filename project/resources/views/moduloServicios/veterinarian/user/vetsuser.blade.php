@extends('layouts.navMenu')
@section('title', 'Veterinarios')
@vite(['resources/css/moduloServicios/user/index.css', 'resources/css/moduloServicios/user/cards.css'])
@section('content')
    <h1>Veterinarios</h1>
        <div class="container-general">
            @foreach ($veterinarians as $veterinarian)
            <div class="cards">
                <a class="container-card" href="{{route('showVeterinarian' ,$veterinarian->id)}}">
                    <div class="img-container">
                        <img src="admin/images/vets/{{$veterinarian->img_ref}}" alt="Imagen vet" />
                    </div>
                    <div class="info-container">
                        <h2>{{$veterinarian->name}}</h2>
                        <p>{{$veterinarian->specialist_animals}}</p>
                    </div>
                </a>
            </div>   
            @endforeach
            
        </div>
@endsection





@extends('layouts.headerNav')
@vite('resources/css/profile/index.css')
@section('content')
<div class="container2">
    <div class="card-space">
        <div for="photo_user" class="name">photo_user: </div>
    </div>
    <div class="info-User">
<<<<<<< Updated upstream
        <div class="card-space">
            <div for="Nombre" class="name">Nombre: </div>
            <div class="user-info">{{$user->name}}</div>
        </div>
        <div class="card-space">
            <div for="last_name" class="name">Apellido: </div>
            <div class="user-info">{{$user->last_name}}</div>
        </div>
        <div class="card-space">
            <div for="dni" class="name">Dni: </div>
            <div class="user-info">{{$user->dni}}</div>
        </div>
        <div class="card-space">
            <div for="phone" class="name">Phone: </div>
            <div class="user-info">{{$user->phone}}</div>
        </div>
        <div class="card-space">
            <div for="address" class="name">Adress:</div>
            <div class="user-info">{{$user->address}}</div>
        </div>
        <div class="card-space">
            <div for="email" class="name">Email:</div>
=======
        <div class="title">
            <h2>Informacion del Usuario</h2>
        </div>
        <div class="card-space">
            <label for="Nombre" class="label">Nombre </label>
            <div class="user-info">{{$user->name}}</div>
        </div>
        <div class="card-space">
            <label for="last_name" class="label">Apellido </label>
            <div class="user-info">{{$user->last_name}}</div>
        </div>
        <div class="card-space">
            <label for="dni" class="label">Dni </label>
            <div class="user-info">{{$user->dni}}</div>
        </div>
        <div class="card-space">
            <label for="phone" class="label">Phone </label>
            <div class="user-info">{{$user->phone}}</div>
        </div>
        <div class="card-space ae">
            <label for="address" class="label">Adress</label>
            <div class="user-info">{{$user->address}}</div>
        </div>
                    <div class="card-space">
                <label for="photo_user" class="label">photo_user </;>
                    <input class="user-info" type="text" value="{{ $user->photo_user }}">
            </div>
        <div class="card-space ae">
            <label for="email" class="label">Email</label>
>>>>>>> Stashed changes
            <div class="user-info">{{$user->email}}</div>
        </div>
        <div class="card-space btn-link">
            <a class="btna" href="{{route('userEdit', $user->id)}}">Editar</a>
        </div>
    </div>
</div>
@endsection

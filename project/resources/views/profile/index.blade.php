@extends('layouts.headerNav')
@vite('resources/css/profile/index.css')
@section('content')
<div class="container2">
    <div class="info-User">
        <div class="card-space">
            <div for="photo_user" class="name">photo_user: </div>
        </div>
        <div class="card-space">
            <label for="Nombre" class="name">Nombre: </label>
            <div class="user-info">{{$user->name}}</div>
        </div>
        <div class="card-space">
            <label for="last_name" class="name">Apellido: </label>
            <div class="user-info">{{$user->last_name}}</div>
        </div>
        <div class="card-space">
            <label for="dni" class="name">Dni: </label>
            <div class="user-info">{{$user->dni}}</div>
        </div>
        <div class="card-space">
            <label for="phone" class="name">Phone: </label>
            <div class="user-info">{{$user->phone}}</div>
        </div>
        <div class="card-space">
            <label for="address" class="name">Adress:</label>
            <div class="user-info">{{$user->address}}</div>
        </div>
        <div class="card-space">
            <label for="email" class="name">Email:</label>
            <div class="user-info">{{$user->email}}</div>
        </div>
        <div class="card-space">
            <a class="btn bg-cyan" href="{{route('userEdit', $user->id)}}">Editar</a>
        </div>
    </div>
</div>
@endsection

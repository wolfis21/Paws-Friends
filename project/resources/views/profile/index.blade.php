@extends('layouts.headerNav')
@vite('resources/css/profile/index.css')
@section('content')
<div class="container2">
    <div class="card-space">
        <div for="photo_user" class="name">photo_user: </div>
    </div>
    <div class="info-User">
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
            <div class="user-info">{{$user->email}}</div>
        </div>
        <div class="card-space">
            <a class="btn bg-cyan" href="{{route('userEdit', $user->id)}}">Editar</a>
        </div>
    </div>
</div>
@endsection

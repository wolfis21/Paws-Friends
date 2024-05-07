@extends('layouts.headerNav')
@vite('resources/css/profile/index.css')
@section('content')
<div class="container2">
        <div class="card-space">
            <label for="photo_user" class="name">photo_user: </;>
            <input class="user-info" type="text" value="{{ $user->photo_user }}">
        </div>
        <form method="POST" action="{{ route('updateUser', $user->id) }}" class="info-User" role="form" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            @csrf
            <div class="card-space">
                <label for="nombre" class="name">Nombre: </label>
                <input class="user-info" type="text" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="card-space">
                <label for="last_name" class="name">Apellido: </label>
                <input class="user-info" id="last_name" name="last_name" type="text" value="{{ $user->last_name }}">
            </div>
            <div class="card-space">
                <label for="dni" class="name">Dni: </label>
                <input class="user-info" type="text" id="dni" name="dni" value="{{ $user->dni }}">
            </div>
            <div class="card-space">
                <label for="phone" class="name">Phone: </label>
                <input class="user-info" type="text" id="phone" name="phone" value="{{ $user->phone }}">
            </div>
            <div class="card-space">
                <label for="address" class="name">Adress:</label>
                <input class="user-info" type="text" id="address" name="address" value="{{ $user->address }}">
            </div>
            <div class="card-space">
                <label for="email" class="name">Email:</label>
                <input class="user-info" type="text" id="email" name="email" value="{{ $user->email }}">
            </div>
            <div class="card-space">
                <a class="btn" href="{{route('user.profile', $user->id)}}">Volver</a>
                <button class="btn">Guardar</button>
            </div>
        </form>
    </div>
@endsection

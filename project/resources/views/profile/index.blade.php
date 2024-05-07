@extends('layouts.headerNav')
@vite('resources/css/profile/index.css')
@section('content')
    <div class="container2">
        <div class="info-User">
            <div class="title">
                <h2>Informacion del Usuario</h2>
            </div>
            <div class="card-space">
                <label for="Nombre" class="label">Nombre </label>
                <div class="user-info">{{ $user->name }}</div>
            </div>
            <div class="card-space">
                <label for="last_name" class="label">Apellido </label>
                <div class="user-info">{{ $user->last_name }}</div>
            </div>
            <div class="card-space">
                <label for="dni" class="label">Dni </label>
                <div class="user-info">{{ $user->dni }}</div>
            </div>
            <div class="card-space">
                <label for="phone" class="label">Phone </label>
                <div class="user-info">{{ $user->phone }}</div>
            </div>
            <div class="card-space ae">
                <label for="address" class="label">Adress</label>
                <div class="user-info">{{ $user->address }}</div>
            </div>
            <div class="card-space ae">
                <label for="email" class="label">Email</label>
                <div class="user-info">{{ $user->email }}</div>
            </div>
            <div class="card-space btn-link">
                <a class="btna" href="{{ route('userEdit', $user->id) }}">Editar</a>
            </div>
        </div>
    </div>
@endsection

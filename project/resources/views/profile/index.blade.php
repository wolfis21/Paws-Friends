@extends('layouts.headerNav')
@vite('resources/css/profile/index.css')
@section('content')
    <div class="container2">
        <div class="info-User">
            <div class="title">
                <h2>Informacion del Usuario</h2>
            </div>
            <div class="card-space peque">
                <label for="Foto" class="label">Foto </label>  {{-- ajustar mejor --}}
                @if($user->photo_user)
                <img style="    width: 50%;" src="/storage/{{ $user->photo_user }}" alt="Imagen perfil" />
                @else
                <p>No se adjuntó Foto de perfil.</p>
                @endif
            </div>
            <div class="card-space peque">
                <label for="Nombre" class="label">Nombre </label>
                <div class="user-info">{{ $user->name }}</div>
            </div>
            <div class="card-space peque">
                <label for="last_name" class="label">Apellido </label>
                <div class="user-info">{{ $user->last_name }}</div>
            </div>
            <div class="card-space peque">
                <label for="dni" class="label">Dni </label>
                <div class="user-info">{{ $user->dni }}</div>
            </div>
            <div class="card-space peque">
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
            <div class="card-space peque">
                <label for="Foto" class="label">Cedula</label>
                @if($user->photo_dni)
                    <img style="width: 50%;" src="/storage/{{ $user->photo_dni }}" alt="Imagen perfil">
                @else
                    <p>No se adjuntó la cédula.</p>
                @endif
            </div>
            
            <div class="card-space peque">
                <label for="Foto" class="label">Rif</label>
                @if($user->photo_rif)
                    <img style="width: 50%;" src="/storage/{{ $user->photo_rif }}" alt="Imagen perfil">
                @else
                    <p>No se adjuntó el RIF.</p>
                @endif
            </div>
            <div class="card-space btn-link">
                <a class="btna" href="{{ route('userEdit', $user->id) }}">Editar</a>
            </div>
        </div>
    </div>
@endsection

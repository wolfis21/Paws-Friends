@extends('layouts.headerNav')
@vite('resources/css/profile/index.css')
@section('content')
    <div class="container2">
        <form method="POST" action="{{ route('updateUser', $user->id) }}" class="info-User" role="form"
            enctype="multipart/form-data">
            {{ method_field('PUT') }}
            @csrf
            <div class="title">
                <h2>Editar Usuario</h2>
            </div>
            <div class="card-space">
                <label for="nombre" class="label">Nombre </label>
                <input class="user-info" type="text" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="card-space">
                <label for="last_name" class="label">Apellido </label>
                <input class="user-info" id="last_name" name="last_name" type="text" value="{{ $user->last_name }}">
            </div>
            <div class="card-space">
                <label for="dni" class="label">Cedula </label>
                <input class="user-info" type="text" id="dni" name="dni" value="{{ $user->dni }}">
            </div>
            <div class="card-space">
                <label for="phone" class="label">Telefono Movil </label>
                <input class="user-info" type="text" id="phone" name="phone" value="{{ $user->phone }}">
            </div>
            <div class="card-space">
                <label for="address" class="label">Direccion</label>
                <input class="user-info" type="text" id="address" name="address" value="{{ $user->address }}">
            </div>
            <div class="card-space">
                <label for="photo_user" class="label">Foto</>
                    <input class="user-info" type="file" value="{{ $user->photo_user }}">
            </div>
            <div class="card-space ae">
                <label for="email" class="label">Correo</label>
                <input class="user-info" type="text" id="email" name="email" value="{{ $user->email }}">
            </div>
            {{-- <div class="card-space ae">
                <label for="password" class="label">Contraseña</label>
                <input class="user-info" type="text" id="password" name="password" value="" placeholder="Ingrese la contraseña">
            </div> --}}
            <div class="card-space btn-link">
                {{-- <a class="btn" href="{{ route('user.profile', $user->id) }}">Volver</a> --}}
                <button class="btnE">Guardar Cambios</button>
            </div>
        </form>
    </div>
@endsection

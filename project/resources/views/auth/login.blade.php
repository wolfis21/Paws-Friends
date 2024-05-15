@extends('layouts.headerNav')
@vite('resources/css/login/loginUser.css')
@section('content')
<div class="content">
    <form class="info-User" method="POST" action="{{ route('login') }}" >
        @csrf
        <div class="register-welcome">
           <div class="welcome">
               <h3 class="text-h3">Bienvenido a </h3>
           </div>
           <div class="logo">
               <img class="logo-register" src="{{ URL::asset('imagenes/Variaciones-logo.png') }}" alt="logo" />
           </div>
           <div class="register">
                <a href="#">¿No tienes una cuenta?
                Registrate</a>
           </div>
        </div>
        <div class="title">
            <h2>Inicia Sesion</h2>
        </div>
        <div class="card-space">
            <label for="Nombre" class="label">Ingresa tu correo electronico</label>
            <input type="email" class="user-info" name="email" id="email" placeholder="Correo electronico"></input>
        </div>
        <div class="card-space">
            <label for="last_name" class="label">Ingresa tu contraseña </label>
            <input type="password" class="user-info" name="password" id="password" placeholder="Contraseña"></input>
        </div>
        <div class="remenber">
            <div class="input-remeber">
                <input type="checkbox" class="user-info" placeholder="Recuerdame">
                <p class="texto">Recuerdame</p>   
            </div>
            <a href="#">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="card-space btn-link">
            <button type="submit" class="btnE">{{ __('Iniciar sesion') }}</button>
        </div>
    </form>
</div>
@endsection

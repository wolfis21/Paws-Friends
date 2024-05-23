@extends('layouts.headerNav')
@vite('resources/css/register/registroUser.css')

@section('content')
    <div class="container-register">
        <fieldset class="flex">
            <form class="box-registre" method="POST" action="{{ route('register') }}">
                {{ method_field('POST') }}
                @csrf
                <div class="register-welcome">
                    <div class="welcome">
                        <h3 class="text-h3">Bienvenido a </h3>
                    </div>
                    <div class="logo">
                        <img class="logo-register" src="{{ URL::asset('imagenes/Variaciones-logo.png') }}" alt="logo" />
                    </div>
                    <div class="register">
                        <span>¿Ya tienes una cuenta?</span><a href="#">Inicia sesion</a>
                    </div>
                </div>
                <div class="title">
                    <h2>Registrate</h2>
                </div>
                <input type="hidden" name="rols_id" value="2">
                <div class="f-left">
                    <div class="card-space">
                        <label>Nombre</label>
                        <input name="name" class="user-info" placeholder="Nombre" />
                    </div>
                    <div class="card-space">
                        <label>Apellido</label>
                        <input name="last_name"class="user-info" placeholder="Apellido" />
                    </div>
                    <div class="card-space">
                        <label>Cedula</label>
                        <input name="dni" class="user-info" placeholder="Cedula" />
                    </div>
                    <div class="card-space direction">
                        <label>Direccion</label>
                        <input name="address" class="user-info" placeholder="Direccion" />
                    </div>
                    <div class="card-space">
                        <label>Telefono Movil</label>
                        <input name="phone" class="user-info" placeholder="Telefono Movil" />
                    </div>
                </div>
                <div class="card-foot">
                    <label>Ingresa correo electronico</label>
                    <input class="user-info" name="email" placeholder="Correo Electronico" />
                </div>
                <div class="card-foot">
                    <label>Ingresa tu contrasena</label>
                    <input class="user-info" name="password" placeholder="Contrasena de la Cuenta" />
                </div>
                <div class="card-space btn-link">
                    <button type="submit" class="btnE">{{ __('Registrate') }}</button>
                </div>
            </form>
        </fieldset>
    </div>
@endsection

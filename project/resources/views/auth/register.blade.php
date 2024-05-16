@extends('layouts.headerNav')
@vite('resources/css/register/registroUser.css')

@section('content')
    <div class="container-register">
        <fieldset >
            <form class="box-registre">
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

                <div class="f-left">
                    <div class="card-space" >
                        <label>Nombre</label>
                        <input class="user-info" placeholder="Nombre"/>
                    </div>
                    <div class="card-space">
                        <label>Cedula</label>
                        <input class="user-info" placeholder="Cedula"/>
                    </div>
                    <div class="card-space">
                        <label>Direccion</label>
                        <input class="user-info" placeholder="Direccion"/>
                    </div>
                    <div class="card-space">
                    <label>Apellido</label>
                    <input class="user-info" placeholder="Apellido"/>
                </div>
                <div class="card-space">
                    <label>Telefono Movil</label>
                    <input class="user-info" placeholder="Telefono Movil"/>
                </div>
                <div class="card-space">
                    <label>Foto</label>
                    <input class="user-info" placeholder="Foto de Perfil"/>
                </div>
                </div>
                
                
                <div class="card-foot">
                    <label>Ingresa correo electronico</label>
                    <input class="user-info" placeholder="Correo Electronico"/>
                </div>
                <div class="card-foot">
                    <label>Ingresa tu contrasena</label>
                    <input class="user-info" placeholder="Contrasena de la Cuenta"/>
                </div>
                <div class="card-space btn-link">
                    <button type="submit" class="btnE">{{ __('Registrate') }}</button>
                </div>
            </form>
        </fieldset>
    </div>
@endsection

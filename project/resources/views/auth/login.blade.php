{{-- @extends('adminlte::auth.login') --}}

{{-- @extends('layouts.app') --}}
@extends('layouts.headerNav')
@vite('resources/css/login/loginUser.css')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="content">
    <form class="info-User" method="POST" action="{{ route('login') }}" >
        @csrf
        <div class="register-welcome">
           <div class="welcome">
               <h3>Bienvenido a </h3>
           </div>
           <div class="logo">
               <img class="logo-register" src="{{ URL::asset('imagenes/Variaciones logo.png') }}" alt="logo" />
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
            <button type="submit" class="btnE">{{ __('Login') }}</button>
        </div>
    </form>
</div>
@endsection

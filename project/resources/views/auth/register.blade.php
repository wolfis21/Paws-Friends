<<<<<<< HEAD
{{-- @extends('layouts.app') --}}

@extends('layouts.headerNav')

@section('content')
    <div class="container-register">
        <div class="row justify-content-center">
            <div class="col-md-8 box-ajust">
                <div class="card add-colors">
                    <div class="card-header-prom">
                        <p>Bienvenido a: </p>
                        <img class="logo-register" src="{{ URL::asset('imagenes/Variaciones logo.png') }}" alt="logo" />
                    </div>
                    <div class="card-header register">Registro</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="superior-container">
                                <div class="row mb-0 width-temp">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-init">{{ __('Nombre') }}</label>

                                    <div class="col-md-6 width-temp-2">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" placeholder="Nombre" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-0 width-temp">
                                    <label for=""
                                        class="col-md-4 col-form-label text-md-init">{{ __('Apellido') }}</label>

                                    <div class="col-md-6 width-temp-2">
                                        <input id="last_name" type="text"
                                            class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                            value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Apellido" autofocus>

                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-0 width-temp">
                                    <label for="dni"
                                        class="col-md-4 col-form-label text-md-init">{{ __('Cedula') }}</label>

                                    <div class="col-md-6 width-temp-2">
                                        <input id="dni" type="text"
                                            class="form-control @error('dni') is-invalid @enderror" name="dni"
                                            value="{{ old('dni') }}" required autocomplete="dni" placeholder="Cedula" autofocus>

                                        @error('dni')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-0 width-temp">
                                    <label for="phone"
                                        class="col-md-4 col-form-label text-md-init">{{ __('Telefono') }}</label>

                                    <div class="col-md-6 width-temp-2">
                                        <input id="phone" type="text"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ old('phone') }}" required autocomplete="phone" placeholder="Telefono movil" autofocus>

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-0 width-temp">
                                    <label for="address"
                                        class="col-md-4 col-form-label text-md-init">{{ __('Direccion') }}</label>

                                    <div class="col-md-6 width-temp-2">
                                        <input id="address" type="text"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ old('address') }}" required autocomplete="address" placeholder="Direccion" autofocus>

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-0 width-temp">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-init">{{ __('Correo') }}</label>

                                    <div class="col-md-6 width-temp-2">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required placeholder="Correo" autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- fin --}}
                            <div class="inferior-container">
                                <div class="row mb-0">
                                    <label for="photo_user"
                                        class="col-md-4 col-form-label text-md-init">{{ __('Ajuste Foto') }}</label>
    
                                    <div class="col-md-6 width-temp-2">
                                        <input id="photo_user" type="file"
                                            class="form-control @error('photo_user') is-invalid @enderror" name="photo_user"
                                            value="{{ old('photo_user') }}" required autocomplete="photo_user" autofocus>
    
                                        @error('photo_user')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-0">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-init">{{ __('Contraseña') }}</label>
    
                                    <div class="col-md-6 width-temp-2">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña"
                                            required autocomplete="new-password">
    
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-0">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-init">{{ __('Confirme Contraseña') }}</label>
    
                                    <div class="col-md-6 width-temp-2">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" placeholder="Repita contraseña" required autocomplete="new-password">
                                    </div>
                                </div>
    
                                <div class="row mb-0">
                                    <div class="col-md-6 width-temp-2 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrarse') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
=======
@extends('adminlte::auth.register')
>>>>>>> origin/module-1

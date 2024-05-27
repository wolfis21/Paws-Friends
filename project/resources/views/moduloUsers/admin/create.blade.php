@extends('layouts.dashboard')
@section('title', 'Crear administrador')

@section('content')
<h1>Añadir Admin</h1>
            <form class="box-registre" method="POST" action="{{route('createForm')}}">
                {{ method_field('POST') }}
                @csrf
                <input type="hidden" name="directo" value="3">
                    <input type="hidden" name="rols_id" value="1">
                
                    <div class="mb-3" >
                        <label class="form-label">Nombre</label>
                        <input name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido</label>
                        <input  name="last_name"class="form-control @error('last_name') is-invalid @enderror" placeholder="Apellido"  />
                        @error('last_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion</label>
                        <input name="address" class="form-control @error('address') is-invalid @enderror" max="100" placeholder="Direccion"  />
                        @error('address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cedula</label>
                        <input name="dni" type="number"  min='100000' max="99999999" class="form-control @error('dni') is-invalid @enderror" placeholder="Cedula"  />
                        @error('dni')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono Movil</label>
                        <input name="phone" type="number" class="form-control @error('dni') is-invalid @enderror" placeholder="Telefono Movil"  />
                        @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" name="photo_user" class="form-control" placeholder="Foto de Perfil"  />
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Ingresa correo electronico</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Correo Electronico"  />
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ingresa tu contrasena</label>
                        <input class="form-control @error('password') is-invalid @enderror"  type="password" name="password" placeholder="Contrasena de la Cuenta"  />
                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="photo_user" class="form-label">Foto Cedula</label>
                            <input class="form-control" type="file" name="photo_dni" value="" >
                    </div>
                    <div class="mb-3">
                        <label for="photo_user" class="form-label">Foto Rif</label>
                            <input class="form-control" type="file" name="photo_rif" value="">
                    </div>
                    <div class="mb-3 btn-link">
                        <button type="submit" class="btn bg-blue">{{ __('Registrate') }}</button>
                    </div>
            </form>
@endsection

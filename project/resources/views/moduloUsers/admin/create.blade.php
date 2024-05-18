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
                        <input name="name" class="form-control" placeholder="Nombre"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido</label>
                        <input  name="last_name"class="form-control" placeholder="Apellido"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion</label>
                        <input name="address" class="form-control" placeholder="Direccion"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cedula</label>
                        <input name="dni" class="form-control" placeholder="Cedula"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono Movil</label>
                        <input name="phone" class="form-control" placeholder="Telefono Movil"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" name="photo_user" class="form-control" placeholder="Foto de Perfil"/>
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Ingresa correo electronico</label>
                        <input class="form-control" name="email" placeholder="Correo Electronico"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ingresa tu contrasena</label>
                        <input class="form-control" name="password" placeholder="Contrasena de la Cuenta"/>
                    </div>
                    <div class="mb-3">
                        <label for="photo_user" class="form-label">Foto Cedula</label>
                            <input class="form-control" type="file" name="photo_dni" value="">
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

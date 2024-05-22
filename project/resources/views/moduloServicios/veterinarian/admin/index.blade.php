@extends('layouts.dashboard')
@vite('resources/views/moduloServicios/admin.css')
@section('title', 'Veterinario')
@section('content')
{{-- @if (session('success'))
    <div id="flashMessageSuccess" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('edit'))
    <div id="flashMessageEdit" class="alert alert-primary">
        {{ session('edit') }}
    </div>
@endif

@if(session('destroy'))
    <div id="flashMessageDestroy" class="alert alert-danger">
        {{ session('destroy') }}
    </div>
@endif

<script>
    $(document).ready(function() {
        // Función para ocultar el mensaje de éxito
        setTimeout(function() {
            $('#flashMessageSuccess').fadeOut('slow');
        }, 5000); // 5000 milisegundos = 5 segundos

        // Función para ocultar el mensaje de edición
        setTimeout(function() {
            $('#flashMessageEdit').fadeOut('slow');
        }, 5000); // 5000 milisegundos = 5 segundos

        // Función para ocultar el mensaje de destrucción
        setTimeout(function() {
            $('#flashMessageDestroy').fadeOut('slow');
        }, 5000); // 5000 milisegundos = 5 segundos
    });
</script> --}}
    <h4 style="margin-top: 15px">Veterinarios admin</h4>
    <a href="{{ route('create') }}" class="btn bg-cyan" style="margin-bottom: 15px;">Añadir
        Veterinario</a>
    <div class="card bg-dark">
        <div class="card-body">


            <table id="Veterinarios" class="table table-dark table-responsive-md" style="width:100%">
                <thead>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Email</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($veterinarians as $veterinarian)
                        <tr>
                            <td>{{ $veterinarian->name }}</td>
                            <td>{{ $veterinarian->address }}</td>
                            <td>{{ $veterinarian->email }}</td>
                            <td>{{ $veterinarian->specialist_animals }}</td>
                            <td>
                                <button type="button" class="btn bg-cyan" data-bs-toggle="modal"
                                    data-bs-target="#viewProfile{{ $veterinarian->id }}">Ver
                                    perfil</button>
                                <button type="button" class="btn bg-red" data-bs-toggle="modal"
                                    data-bs-target="#deleteProfile{{ $veterinarian->id }}">Eliminar</button>
                            </td>
                        </tr>
                        {{-- <td>{{ $veterinarian->img_ref }} 
                            <img style="width: 5%;" src="{{ asset('storage/' . $veterinarian->img_ref) }}" > -- provisional mejorar esto 
                        </td> --}}
                        @include('moduloServicios.veterinarian.admin.ModalViewProfile')
                        @include('moduloServicios.veterinarian.admin.ModalDeleteProfile')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- TODO COMENTARIOS --}}
    <h4>Comentarios Veterinarios admin</h4>
    <div class="card bg-dark">
        <div class="card-body">

            <table id="ComentariosVets" class="table table-dark" style="width:100%">
                <thead>
                    <th scope="col">Usuario</th>
                    <th scope="col">Comentario</th>
                    <th scope="col">Veterinario</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($veterinariansComments as $veterinarianComment)
                        @if ($veterinarianComment->comments->accepted === null)
                            <tr>
                                <td>{{ $veterinarianComment->comments->users->name }}</td>
                                <td>{{ $veterinarianComment->comments->data_text }}</td>
                                <td>{{ $veterinarianComment->veterinarians->name }}</td>
                                <td>
                                    <form action="{{ route('destroyVetsComment', $veterinarianComment->comments->id) }}"
                                        method="POST">
                                        @method('PUT')
                                        <a class="btn bg-cyan"
                                            href="{{ route('configComment', $veterinarianComment->comments->id) }}">Confirmar</a>
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn bg-red">Denegar</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- codigo para mostrar imagenes --}}
    {{-- @foreach ($veterinarians as $veterinarian)
        <div class="container">
            <img src="images/vets/{{($veterinarian->img_ref)}}" alt="a">
        </div> --}}
@endsection

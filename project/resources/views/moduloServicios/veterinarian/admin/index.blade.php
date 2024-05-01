@extends('moduloServicios.dashboard')
@section('title', 'Veterinario')
@section('content')

    <a href="{{ route('create') }}" class="btn bg-cyan" style="margin-top: 15px;">Añadir Veterinario</a>
    <h4>Veterinarios admin</h4>
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
                                <button type="button" class="btn bg-cyan" data-bs-toggle="modal" data-bs-target="#viewProfile{{$veterinarian->id}}">Ver perfil</button>
                                <button type="button" class="btn bg-red" data-bs-toggle="modal" data-bs-target="#deleteProfile{{$veterinarian->id}}">Eliminar</button>
                            </td>
                        </tr>
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
                    <th scope="col">User Name</th>
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
                                <td>{{ $veterinarian->name }}</td>
                                <td>
                                    <form action="{{ route('destroyVetsComment', $veterinarianComment->id) }}"
                                        method="POST">
                                        @method('PUT')
                                        <a class="btn bg-cyan"
                                            href="{{ route('acceptCommentVeterinarians', $veterinarianComment->id) }}">Confirmar</a>
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
        </div>
    @endforeach --}}
@endsection

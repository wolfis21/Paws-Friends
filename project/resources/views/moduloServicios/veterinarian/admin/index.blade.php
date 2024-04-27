{{-- @extends('layouts.example') --}}
@extends('moduloServicios.dashboard')
@section('title', 'Veterinario')
@section('content')

    <a href="{{ route('create') }}" class="btn btn-primary">Añadir Veterinario</a>
    <h1>Veterinarios admin</h1>
    <table class=" table table-dark">
        <thead>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Email</th>
            <th scope="col">Link</th>
            <th scope="col">Img</th>
            <th scope="col">Especialidad</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach ($veterinarians as $veterinarian)
                <tr>
                    <td>{{ $veterinarian->name }}</td>
                    <td>{{ $veterinarian->address }}</td>
                    <td>{{ $veterinarian->email }}</td>
                    <td>{{ $veterinarian->link_ref }}</td>
                    <td>{{-- {{ $veterinarian->img_ref }} --}}
                        <img style="width: 5%;" src="{{ asset('storage/' . $veterinarian->img_ref) }}" >
                    </td>
                    <td>{{ $veterinarian->specialist_animals }}</td>
                    <td>
                        <form action="{{ route('destroy', $veterinarian->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('edit', $veterinarian->id) }}">Editar</a>
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Comentarios Veterinarios admin</h1>
    <table class=" table table-dark">
        <thead>
            <th scope="col">User Name</th>
            <th scope="col">Comentario</th>
            <th scope="col">Veterinario</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach ($veterinariansComments as $veterinarianComment)
            <tr>
                    @if ($veterinarianComment->comments->accepted === null)
                        <td>{{ $veterinarianComment->comments->users->name }}</td>
                        <td>{{ $veterinarianComment->comments->data_text }}</td>
                        <td>{{ $veterinarian->name }}</td>
                        <td>
                            <form action="{{ route('destroyVetsComment', $veterinarianComment->id) }}" method="POST">
                                @method('PUT')
                                <a class="btn btn-primary"
                                    href="{{ route('configComment', $veterinarianComment->id) }}">Confirmar</a>
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Denegar</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- codigo para mostrar imagenes --}}
    {{-- @foreach ($veterinarians as $veterinarian)
        <div class="container">
            <img src="images/vets/{{($veterinarian->img_ref)}}" alt="a">
        </div>
    @endforeach --}}
@endsection

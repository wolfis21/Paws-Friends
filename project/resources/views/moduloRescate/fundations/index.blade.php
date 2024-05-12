{{-- @extends('layouts.example') --}}
@extends('moduloRescate.dashboard')
@section('title', 'Fundaciones')
@section('content')

    <a href="{{ route('fundations.create') }}" class="btn btn-primary">Añadir Fundación</a>
    <h1>Fundaciones</h1>
    <table class=" table table-dark">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Email</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach ($fundations as $fundation)
                <tr>
                    <td>{{ $fundation->id }}</td>
                    <td>{{ $fundation->name }}</td>
                    <td>{{ $fundation->phone }}</td>
                    <td>{{ $fundation->email }}</td>
                    <td>{{ $fundation->description }}</td>
                    <td>
                        <form action="{{ route('fundations.destroy', $fundation->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('fundations.edit', $fundation->id) }}">Editar</a>
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

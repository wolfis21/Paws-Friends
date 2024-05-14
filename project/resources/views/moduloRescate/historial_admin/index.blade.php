{{-- @extends('layouts.example') --}}
@extends('moduloRescate.dashboard')
@section('title', 'Historial Admin')
@section('content')

    <a href="{{ route('historial_admin.create') }}" class="btn btn-primary">Crear Demanda</a>

    <h1>Historial Demandas</h1>
    <table class=" table table-dark">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Demanda</th>
            <th scope="col">Motivo</th>
            <th scope="col">Urgencia</th>
            <th scope="col">Status Demanda</th>
            <th scope="col">Status Fundación</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach ($demand as $demands_animalss)
                <tr>
                    <td>{{ $demands_animalss->id }}</td>
                    <td>{{ $demands_animalss->user->name }}</td>
                    <td>{{ $demands_animalss->description_case }}</td>
                    <td>{{ $demands_animalss->motivo->name }}</td>
                    <td>{{ $demands_animalss->urgencia->name }}</td>
                    <td>{{ $demands_animalss->types_status->name }}</td>
                    <td>{{ $demands_animalss->statusfund->name }}</td>

                    <td>
                        <form action="{{ route('historial_admin.destroy', $demands_animalss->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('historial_admin.edit', $demands_animalss->id) }}">Editar</a>
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Historial Rescates Completados</h1>
    <table class=" table table-dark">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Demanda</th>
            <th scope="col">Motivo</th>
            <th scope="col">Urgencia</th>
            <th scope="col">Fundación</th>
            <th scope="col">Status</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach ($demand as $demands_animalss)
                <tr>
                    <td>{{ $demands_animalss->id }}</td>
                    <td>{{ $demands_animalss->user->name }}</td>
                    <td>{{ $demands_animalss->description_case }}</td>
                    <td>{{ $demands_animalss->motivo->name }}</td>
                    <td>{{ $demands_animalss->urgencia->name }}</td>
                    <td>{{ $demands_animalss->types_status->name }}</td>
                    <td>{{ $demands_animalss->statusfund->name }}</td>

                    <td>
                        <form action="{{ route('historial_admin.destroy', $demands_animalss->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('historial_admin.edit', $demands_animalss->id) }}">Editar</a>
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

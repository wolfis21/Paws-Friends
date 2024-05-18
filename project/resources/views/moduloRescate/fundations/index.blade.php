{{-- @extends('layouts.example') --}}
@extends('layouts.dashboard')
@section('title', 'Fundaciones')
@section('content')

    <h4 style="margin-top: 15px">Fundaciones</h4>
    <a href="{{ route('fundations.create') }}" class="btn bg-cyan" style="margin-bottom: 15px;">Añadir Fundación</a>
    <div class="card bg-dark">
        <div class="card-body">


            <table id="Veterinarios" class="table table-dark table-responsive-md" style="width:100%">
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
        </div>
    </div>
@endsection

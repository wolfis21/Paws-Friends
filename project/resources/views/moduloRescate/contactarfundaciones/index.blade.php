{{-- @extends('layouts.example') --}}
@extends('moduloRescate.dashboard')
@section('title', 'Contacto de Fundaciones')
@section('content')

    <a href="{{ route('contactarfundaciones.create') }}" class="btn btn-primary">Contactar Fundación</a>
    <h1>Contactos Realizados</h1>
    <table class=" table table-dark">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Demanda</th>
            <th scope="col">Fundación</th>
            <th scope="col">Descripción</th>
            <th scope="col">Status Fundación</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach ($contacto as $demand_animal_has_fundation)
                <tr>
                    <td>{{ $demand_animal_has_fundation->id }}</td>
                    <td>{{ $demand_animal_has_fundation->demands_animalss->description_case }}</td>
                    <td>{{ $demand_animal_has_fundation->fundation->name }}</td>
                    <td>{{ $demand_animal_has_fundation->description }}</td>
                    <td>{{ $demand_animal_has_fundation->demands_animalss->statusfund->name }}</td>
                    <td>
                        <form action="{{ route('contactarfundaciones.destroy', $demand_animal_has_fundation->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('contactarfundaciones.edit', $demand_animal_has_fundation->id) }}">Status</a>
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

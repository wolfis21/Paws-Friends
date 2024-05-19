{{-- @extends('layouts.example') --}}
@extends('layouts.dashboard')
@section('title', 'Contacto de Fundaciones')
@section('content')

    <h4 style="margin-top: 15px">Contactos Realizados</h4>
    <a href="{{ route('contactarfundaciones.create') }}" class="btn bg-cyan" style="margin-bottom: 15px;">Contactar Fundación</a>
    <div class="card bg-dark">
        <div class="card-body">


            <table id="Veterinarios" class="table table-dark table-responsive-md" style="width:100%">
                <thead>
                    <th scope="col">Id</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Demanda</th>
                    <th scope="col">Fundación</th>
                    <th scope="col">Email</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Status Fundación</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($contacto as $demand_animal_has_fundation)
                <tr>
                    <td>{{ $demand_animal_has_fundation->id }}</td>
                    <td>{{ $demand_animal_has_fundation->demands_animalss->user->name }}</td>
                    <td>{{ $demand_animal_has_fundation->demands_animalss->description_case }}</td>
                    <td>{{ $demand_animal_has_fundation->fundation->name }}</td>
                    <td>{{ $demand_animal_has_fundation->fundation->email }}</td>
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
        </div>
    </div>
@endsection

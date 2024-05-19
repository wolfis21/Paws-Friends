{{-- @extends('layouts.example') --}}
@extends('layouts.dashboard')
@section('title', 'Historial Admin')
@section('content')

    <h4 style="margin-top: 15px">Historial Demandas</h4>
    <a href="{{ route('historial_admin.create') }}" class="btn bg-cyan" style="margin-bottom: 15px;">Crear Demanda</a>
    <div class="card bg-dark">
        <div class="card-body">


            <table id="Veterinarios" class="table table-dark table-responsive-md" style="width:100%">
                <thead>
                    <th scope="col">Id</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Demanda</th>
                    <th scope="col">Motivo</th>
                    <th scope="col">Urgencia</th>
                    <th scope="col">Status Demanda</th>
                    <th scope="col">Status Fundación</th>
                    <th scope="col">Fecha</th>
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
                    <td>{{ $demands_animalss->created_at->format('d/m/Y') }}</td>

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
        </div>
    </div>

    <h4 style="margin-top: 15px">Historial Rescates Completados</h4>
    <div class="card bg-dark">
        <div class="card-body">


            <table id="Veterinarios" class="table table-dark table-responsive-md" style="width:100%">
                <thead>
                    <th scope="col">Id</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Demanda</th>
                    <th scope="col">Motivo</th>
                    <th scope="col">Urgencia</th>
                    <th scope="col">Fundación</th>
                    <th scope="col">Status</th>
                    <th scope="col">Fecha</th>

                </thead>
                <tbody>
                    @foreach ($completada as $demand_animal_has_fundation)
                <tr>
                    <td>{{ $demand_animal_has_fundation->demands_animalss->id }}</td>
                    <td>{{ $demand_animal_has_fundation->demands_animalss->user->name }}</td>
                    <td>{{ $demand_animal_has_fundation->demands_animalss->description_case }}</td>
                    <td>{{ $demand_animal_has_fundation->demands_animalss->motivo->name }}</td>
                    <td>{{ $demand_animal_has_fundation->demands_animalss->urgencia->name }}</td>
                    <td>{{ $demand_animal_has_fundation->fundation->name }}</td>
                    <td>{{ $demand_animal_has_fundation->demands_animalss->statusfund->name }}</td>
                    <td>{{ $demand_animal_has_fundation->updated_at->format('d/m/Y')}}</td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

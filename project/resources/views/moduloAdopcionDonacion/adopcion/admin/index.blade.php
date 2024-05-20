@extends('layouts.dashboard')
@vite('resources/css/moduloAdopcionesDonaciones/crub.css')
@section('title','Adopciones')
@section('content')
    <h4 style="margin-top: 15px">Adopciones admin</h4>
    <a href="{{ route('adopciones.create') }}" class="btn bg-purple" style="margin-bottom: 15px;">Crear adopcion</a>
    {{-- acomodar --}}
    <div class="card bg-dark">
        <div class="card-body">
            <table id='Adopciones' class="table table-dark table-responsive-md" style="width:100%">
                <thead clase="table table-dark table-responsive-md" style="width:100%">
                    <tr> {{-- evaluar contenido --}}
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Especiee</th>
                        <th scope="col">Raza</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Edad</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($adopcion as $animals_adoptions)
                        @if ($animals_adoptions->status === 'En proceso')
                            <tr>
                                <td>{{ $animals_adoptions->id }}</td>
                                <td>{{ $animals_adoptions->name }}</td>
                                <td>{{ $animals_adoptions->species }}</td>
                                <td>{{ $animals_adoptions->animal_race }}</td>
                                <td>{{ $animals_adoptions->sex_animal }}</td>
                                <td>{{ $animals_adoptions->age_animal }}</td>
                                <td>
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#viewProfile{{ $animals_adoptions->id }}" class="btn bg-purple">Ver
                                        mas</button>
                                    <button type="button" class="btn bg-red" data-bs-toggle="modal"
                                        data-bs-target="#deleteProfile{{ $animals_adoptions->id }}">Rechazar</button>
                                </td>
                            </tr>
                            @include('moduloAdopcionDonacion.adopcion.admin.modalVer')
                            @include('moduloAdopcionDonacion.adopcion.admin.modalRechazar')
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

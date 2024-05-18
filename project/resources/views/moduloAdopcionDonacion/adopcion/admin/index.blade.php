@extends('layouts.dashboard')
@vite('resources/css/moduloAdopcionesDonaciones/estilosCrub.css')
@section('content')
  <h4 style="margin-top: 15px">Adopciones admin</h4>
    <a href="{{ route('adopciones.create') }}" class="btn bg-purple" style="margin-bottom: 15px;">Crear adopcion</a> {{-- acomodar --}}
    <div class="card bg-dark" >
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
                    <tr>
                        <td>{{ $animals_adoptions->id }}</td>
                        <td>{{ $animals_adoptions->name }}</td>
                        <td>{{ $animals_adoptions->species }}</td>
                        <td>{{ $animals_adoptions->animal_race }}</td>
                        <td>{{ $animals_adoptions->sex_animal }}</td>
                        <td>{{ $animals_adoptions->age_animal }}</td>
                        <td>
                            <form action="{{ route('destroyAnimals', $animals_adoptions->id) }}" method="POST">
                                <a href="/AdminPP/{{ $animals_adoptions->id }}/edit" class="btn bg-purple">Ver mas</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @include('moduloAdopcionDonacion.adopcion.admin.modalVer')
                    @include('moduloAdopcionDonacion.adopcion.admin.modalBorrar')
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
@endsection

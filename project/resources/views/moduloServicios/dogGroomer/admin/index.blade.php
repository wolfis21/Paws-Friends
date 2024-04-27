@extends('moduloServicios.dashboard')
@section('title', 'Peluqueria')
@section('content')
    <a href="{{route('createDogGroomer')}}" class="btn btn-primary">Añadir Peluqueria</a>
    <h1>Peluqueria Admin</h1>
    <div class="card">
        <div class="card-body">
            <table id="Peluqueria" class="table table-dark" style="width:100%">
                <thead>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Link</th>
                    <th scope="col">Img</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($dogGroomers as $dogGroomer)
                        <tr>
                            <td>{{$dogGroomer->name}}</td>
                            <td>{{$dogGroomer->address}}</td>
                            <td>{{$dogGroomer->phone}}</td>
                            <td>{{$dogGroomer->link_ref}}</td>
                            <td>{{$dogGroomer->img_ref}}</td>
                            <td>
                                <form action="{{route('destroyDogGroomer',$dogGroomer->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('editDogGroomer', $dogGroomer->id ) }}">Editar</a>
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

    <div class="card">
        <div class="card-body">
            <table id="PeluqueriaComments" class="table table-dark" style="width:100%">
                {{-- ?lo que prosigue de la tabla Comentario --}}
            </table>
        </div>
    </div>
@endsection
@extends('dashboard')
@section('title', 'Dog Groomer')
@section('content')
    <a href="{{route('createDogGroomer')}}" class="btn btn-primary">Crear Dog Groomer</a>
    <h1>Dog Groomer Admin</h1>
    <table class=" table table-dark">
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
@endsection
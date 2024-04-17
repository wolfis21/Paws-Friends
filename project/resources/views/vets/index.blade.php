@extends('layouts.example')

@section('content')

    <a href="vets/create" class="btn btn-primary">Crear</a>
    <p>Veterinarios admin</p>
    <table class=" table table-dark">
        <thead>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Email</th>
            <th scope="col">Link</th>
            <th scope="col">Img</th>
            <th scope="col">Especialidad</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach ($veterinarians as $veterinarian)
                <tr>
                    <td>{{$veterinarian->name}}</td>
                    <td>{{$veterinarian->address}}</td>
                    <td>{{$veterinarian->email}}</td>
                    <td>{{$veterinarian->link_ref}}</td>
                    <td>{{$veterinarian->img_ref}}</td>
                    <td>{{$veterinarian->specialist_animals}}</td>
                    <td>
                        <form action="{{route('vets.destroy',$veterinarian->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('vets.edit', $veterinarian->id ) }}">Editar</a>
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
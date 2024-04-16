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
            @foreach ($veterinarios as $veterinario)
                <tr>
                    <td>{{$veterinario->name}}</td>
                    <td>{{$veterinario->address}}</td>
                    <td>{{$veterinario->email}}</td>
                    <td>{{$veterinario->link_ref}}</td>
                    <td>{{$veterinario->img_ref}}</td>
                    <td>{{$veterinario->specialist_animals}}</td>
                    <td>
                        <a class="btn btn-primary">Editar</a>
                        <a class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@extends('layouts.dashboard')
@section('title', 'Administradores')
@section('content')

    <h4 style="margin-top: 15px">Administradores</h4>
    <a href="/adminPWFS/admin/create" class="btn bg-blue" style="margin-bottom: 15px;">Añadir
        Administrador</a>
    <div class="card bg-dark">
        <div class="card-body">


            <table id="Veterinarios" class="table table-dark table-responsive-md" style="width:100%">
                <thead>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $admin->name }} {{ $admin->last_name }}</td>
                            <td>{{ $admin->dni }}</td>
                            <td>{{ $admin->phone }}</td>
                            <td>{{ $admin->address }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>
                                <button type="button" class="btn bg-blue" data-bs-toggle="modal"
                                    data-bs-target="#viewProfile{{ $admin->id }}">
                                    Ver mas</button>
                                <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteProfile{{ $admin->id }}"><i class="fa fa-fw fa-trash"></i>
                                    Eliminar</button>
                            </td>
                        </tr>
                        @include('moduloUsers.admin.ModalViewProfile')
                        @include('moduloUsers.admin.ModalDeleteProfile')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

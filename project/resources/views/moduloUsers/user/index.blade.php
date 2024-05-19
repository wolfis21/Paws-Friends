@extends('layouts.dashboard')
@section('title', 'Clientes')
@section('content')

    <h4 style="margin-top: 15px">Clientes</h4>
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
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->name }}{{ $customer->last_name }}</td>
                            <td>{{ $customer->dni }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>
                                <button type="button" class="btn bg-blue" data-bs-toggle="modal"
                                    data-bs-target="#viewProfile{{ $customer->id }}">
                                    Ver mas</button>

                            </td>
                        </tr>
                        @include('moduloUsers.user.ModalViewProfile')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
   
@endsection

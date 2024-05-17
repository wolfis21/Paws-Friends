@extends('layouts.dashboard')
@section('title', 'Tienda')
@section('content')
<h4 style="margin-top: 15px">Tiendas admin</h4>
<a href="{{route('createProduct')}}" class="btn bg-green" style="margin-bottom: 15px;">Añadir
    Tienda</a>
<div class="card bg-dark">
    <div class="card-body">


        <table id="Tiendas" class="table table-dark table-responsive-md" style="width:100%">
            <thead>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Mail</th>
                <th scope="col">Redes sociales</th>
                <th scope="col">Acciones</th>
            </thead>
            <tbody>
                @foreach ($shops as $shop)
                    <tr>
                        <td>{{ $shop->name }}</td>
                        <td>{{ $shop->address }}</td>
                        <td>{{ $shop->phone }}</td>
                        <td>{{ $shop->mail }}</td>
                        <td>{{ $shop->link_ref }}</td>
                        <td>
                            <button type="button" class="btn bg-green" data-bs-toggle="modal"
                                data-bs-target="#viewProfile{{ $shop->id }}">Ver
                                tienda</button>
                            <button type="button" class="btn bg-red" data-bs-toggle="modal"
                                data-bs-target="#deleteProfile{{ $shop->id }}">Eliminar</button>
                        </td>
                    </tr>
                    {{-- @include('moduloServicios.product.admin.ModalViewProfile') --}}
                    {{-- @include('moduloServicios.product.admin.ModalDeleteProfile') --}} 
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
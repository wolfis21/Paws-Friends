@extends('layouts.dashboard')
@section('title', 'Producto')
@section('content')
<h4 style="margin-top: 15px">Productos admin</h4>
<a href="{{route('createProduct')}}" class="btn bg-green" style="margin-bottom: 15px;">Añadir
    Producto</a>
<div class="card bg-dark">
    <div class="card-body">


        <table id="Productos" class="table table-dark table-responsive-md" style="width:100%">
            <thead>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Categoria</th>
                <th scope="col">Acciones</th>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->category_animal->name }}</td>
                        <td>
                            <button type="button" class="btn bg-green" data-bs-toggle="modal"
                                data-bs-target="#viewProfile{{ $product->id }}">Ver
                                producto</button>
                            <button type="button" class="btn bg-red" data-bs-toggle="modal"
                                data-bs-target="#deleteProfile{{ $product->id }}">Eliminar</button>
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
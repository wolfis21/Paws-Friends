@extends('layouts.dashboard')
@vite('resources/css/moduloCatalogo/crub.css')
@section('title', 'Categoria')
@section('content')
    @include('../../../layouts/messageActions')
    <a href="{{ route('categoryProducts.create') }}" class="btn bg-cyan" style="margin-bottom: 15px;">Añadir Categoria</a>
    <div class="card bg-dark">
        <div class="card-body">
            <table id="CategoriaProduct" class="table table-dark table-responsive-md" style="width:100%">
                <thead>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($categories as $categoryProduct)
                        <tr>
                            <td>{{ $categoryProduct->name }}</td>
                            <td>
                                <button type="button" class="btn bg-red" data-bs-toggle="modal"
                                    data-bs-target="#deleteProfile{{ $categoryProduct->id }}">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
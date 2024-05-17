@extends('layouts.dashboard')
@section('title', 'Post')
@section('content')

<h4 style="margin-top: 15px">Post admin</h4>
<a href="{{route('createPost')}}" class="btn bg-green" style="margin-bottom: 15px;">Añadir
    Post</a>
<div class="card bg-dark">
    <div class="card-body">


        <table id="Posts" class="table table-dark table-responsive-md" style="width:100%">
            <thead>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->post_content }}</td>
                        <td>
                            <button type="button" class="btn bg-green" data-bs-toggle="modal"
                                data-bs-target="#viewProfile{{ $post->id }}">Ver
                                perfil</button>
                            <button type="button" class="btn bg-red" data-bs-toggle="modal"
                                data-bs-target="#deleteProfile{{ $post->id }}">Eliminar</button>
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
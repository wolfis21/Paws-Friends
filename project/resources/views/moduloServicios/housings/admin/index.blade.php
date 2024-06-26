@extends('layouts.dashboard')
@vite('resources/views/moduloServicios/admin.css')
@section('title', 'Alojamiento')
@section('content')
    @include('../../../layouts/messageActions')
    <h4 style="margin-top: 15px;">Alojamiento Admin</h4>
    <a style="margin-bottom: 15px;" href="{{ route('createHousing') }}" class="btn bg-cyan" style="margin-top: 15px;">Añadir
        Alojamiento</a>
    <div class="card bg-dark">
        <div class="card-body">
            <table id="Alojamiento" class="table table-responsive-md table-dark" style="width:100%">
                <thead>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Localizacion</th>
                    <th scope="col">Tipo animal</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($housings as $housing)
                        <tr>
                            <td>{{ $housing->name }}</td>
                            <td>{{ $housing->address }}</td>
                            <td>{{ $housing->phone }}</td>
                            <td>{{ $housing->description_location }}</td>
                            <td>{{ $housing->type_animals }}</td>
                            {{-- <td><img src="images/housings/{{($housing->img_ref)}}"  alt="a" ></td> --}}
                            <td>
                                <button type="button" class="btn bg-cyan" data-bs-toggle="modal"
                                    data-bs-target="#viewProfile{{ $housing->id }}">Ver perfil</button>
                                <button type="button" class="btn bg-red" data-bs-toggle="modal"
                                    data-bs-target="#deleteProfile{{ $housing->id }}">Eliminar</button>
                            </td>
                        </tr>
                        @include('moduloServicios.housings.admin.ModalViewProfile')
                        @include('moduloServicios.housings.admin.ModalDeleteProfile')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('../../../layouts/messageComments')
    <h4>Comentarios Alojamientos admin</h4>
    <div class="card bg-dark">
        <div class="card-body">

            <table id="AlojamientoComments" class="table table-dark" style="width:100%">
                <thead>
                    <th scope="col">UserName</th>
                    <th scope="col">Comentario</th>
                    <th scope="col">Alojamiento</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($housingsComments as $housingComment)
                        @if ($housingComment->comments->accepted === null)
                            <tr>
                                <td>{{ $housingComment->comments->users->name }}</td>
                                <td>{{ $housingComment->comments->data_text }}</td>
                                <td>{{ $housing->name }}</td>
                                <td>
                                    <form action="{{ route('destroyHousingsComment', $housingComment->comments->id) }}"
                                        method="POST">
                                        @method('PUT')
                                        <a class="btn bg-cyan"
                                            href="{{ route('acceptHousingsComment', $housingComment->comments->id) }}">Confirmar</a>
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn bg-red">Denegar</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

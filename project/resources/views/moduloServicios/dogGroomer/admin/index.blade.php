@extends('moduloServicios.dashboard')
@section('title', 'Peluqueria')
@section('content')
    <h4 style="margin-top: 15px">Peluqueria Admin</h4>
    <a style="margin-bottom: 15px;" href="{{route('createDogGroomer')}}" class="btn bg-cyan" style="margin-top: 15px;">Añadir Peluqueria</a>
    <div class="card bg-dark">
        <div class="card-body">
            <table id="Peluqueria" class="table table-dark table-responsive-md" style="width:100%">
                <thead>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($dogGroomers as $dogGroomer)
                        <tr>
                            <td>{{$dogGroomer->name}}</td>
                            <td>{{$dogGroomer->address}}</td>
                            <td>{{$dogGroomer->phone}}</td>
                            {{-- <td><img src="images/dogGroomers/{{($dogGroomer->img_ref)}}" alt="a"></td> --}}
                            <td>
                                <button type="button" class="btn bg-cyan" data-bs-toggle="modal" data-bs-target="#viewProfile{{$dogGroomer->id}}">Ver perfil</button>
                                <button type="button" class="btn bg-red" data-bs-toggle="modal" data-bs-target="#deleteProfile{{$dogGroomer->id}}">Eliminar</button>
                            </td>
                        </tr>
                        @include('moduloServicios.dogGroomer.admin.ModalViewProfile')
                        @include('moduloServicios.dogGroomer.admin.ModalDeleteProfile')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <h4>Comentarios Peluqueria admin</h4>
    <div class="card bg-dark">
        <div class="card-body">

            <table id="PeluqueriaComments" class="table table-dark" style="width:100%">
                <thead>
                    <th scope="col">UserName</th>
                    <th scope="col">Comentario</th>
                    <th scope="col">Peluqueria</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($dogGroomersComments as $dogGroomerComment)
                        @if ($dogGroomerComment->comments->accepted === null)
                            <tr>
                                <td>{{ $dogGroomerComment->comments->users->name }}</td>
                                <td>{{ $dogGroomerComment->comments->data_text }}</td>
                                <td>{{ $dogGroomer->name }}</td>
                                <td>
                                    <form action="{{ route('destroyDogGroomersComment', $dogGroomerComment->id) }}"
                                        method="POST">
                                        @method('PUT')
                                        <a class="btn bg-cyan"
                                            href="{{ route('acceptDogGroomersComment', $dogGroomerComment->id) }}">Confirmar</a>
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
 
{{-- 
    @foreach ($dogGroomers as $dogGroomers)
        <div class="container">
            <img src="images/dogGroomers/{{($dogGroomer->img_ref)}}" alt="a">
        </div>
    @endforeach --}}
@endsection
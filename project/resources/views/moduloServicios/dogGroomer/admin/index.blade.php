@extends('moduloServicios.dashboard')
@section('title', 'Peluqueria')
@section('content')
    <a href="{{route('createDogGroomer')}}" class="btn btn-success">Añadir Peluqueria</a>
    <h1>Peluqueria Admin</h1>
    <div class="card">
        <div class="card-body">
            <table id="Peluqueria" class="table table-dark" style="width:100%">
                <thead>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Link</th>
                    <th scope="col">Img</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($dogGroomers as $dogGroomer)
                        <tr>
                            <td>{{$dogGroomer->name}}</td>
                            <td>{{$dogGroomer->address}}</td>
                            <td>{{$dogGroomer->phone}}</td>
                            <td>{{$dogGroomer->link_ref}}</td>
                            <td><img src="images/dogGroomers/{{($dogGroomer->img_ref)}}" alt="a"></td>
                            <td>
                                <form action="{{route('destroyDogGroomer',$dogGroomer->id) }}" method="POST">
                                    <a class="btn btn-success" href="{{ route('editDogGroomer', $dogGroomer->id ) }}">Editar</a>
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <h1>Comentarios Peluqueria admin</h1>
    <div class="card">
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
                                        <a class="btn btn-primary"
                                            href="{{ route('acceptDogGroomersComment', $dogGroomerComment->id) }}">Confirmar</a>
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Denegar</button>
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
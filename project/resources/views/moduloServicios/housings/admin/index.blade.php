@extends('moduloServicios.dashboard')
@section('title', 'Alojamiento')
@section('content')
    <a href="{{route('createHousing')}}" class="btn bg-cyan">Añadir Alojamiento</a>
    <h1>Alojamiento Admin</h1>
    <div class="card bg-dark">
        <div class="card-body">
            <table id="Alojamiento" class="table table-responsive-md table-dark" style="width:100%">
                <thead>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Localizacion</th>
                    <th scope="col">Tipo animal</th>
                    <th scope="col">food_offer</th>
                    <th scope="col">Img</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($housings as $housing)
                        <tr>
                            <td>{{$housing->address}}</td>
                            <td>{{$housing->phone}}</td>
                            <td>{{$housing->description_location}}</td>
                            <td>{{$housing->type_animals}}</td>
                            <td>{{$housing->food_offer}}</td>
                            <td><img src="images/housings/{{($housing->img_ref)}}"  alt="a" ></td>
                            <td>
                                <form action="{{route('destroyHousing',$housing->id) }}" method="POST">
                                    <a class="btn bg-cyan" href="{{ route('editHousing', $housing->id ) }}">Editar</a>
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn bg-red">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <h1>Comentarios Alojamientos admin</h1>
    <div class="card">
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
                                    <form action="{{ route('destroyHousingsComment', $housingComment->id) }}"
                                        method="POST">
                                        @method('PUT')
                                        <a class="btn bg-cyan"
                                            href="{{ route('acceptHousingsComment', $housingComment->id) }}">Confirmar</a>
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
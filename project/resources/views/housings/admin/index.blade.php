@extends('dashboard')
@section('title', 'Housing')
@section('content')
    <a href="{{route('createHousing')}}" class="btn btn-primary">Crear Housing</a>
    <h1>Housing Admin</h1>
    <table class=" table table-dark">
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
                    <td>{{$housing->img_ref}}</td>
                    <td>
                        <form action="{{route('destroyHousing',$housing->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('editHousing', $housing->id ) }}">Editar</a>
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
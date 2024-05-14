@extends('layouts.dashboard')

@section('content')

<a href="{{ route('adopciones.create') }}"  class="btn btn-primary">CREAR</a> {{-- acomodar --}}
<table id='adopciones' class="table table-dark table-bordered shadow-lg mt-4" style="width:100%">
  <thead clase="bg-primary text-white">
    <tr> {{-- evaluar contenido --}}
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">SPECIES</th>  
      <th scope="col">ANIMAL RACE</th>
      <th scope="col">SEX ANIMAL</th>
      <th scope="col">AGE ANIMAL</th>  
      <th scope="col">DESCRIPTION ANIMALS</th>
      <th scope="col">PHOTO ANIMAL</th>
      <th scope="col">LOCATION ADDRESS</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>  
    <tbody>
      @foreach ($adopcion as $animals_adoptions)
      <tr>
        <td>{{$animals_adoptions->id}}</td>
        <td>{{$animals_adoptions->name}}</td>
        <td>{{$animals_adoptions->species}}</td>
        <td>{{$animals_adoptions->animal_race}}</td>
        <td>{{$animals_adoptions->sex_animal}}</td>
        <td>{{$animals_adoptions->age_animal}}</td>
        <td>{{$animals_adoptions->description_animals}}</td>
        <td>{{$animals_adoptions->photo_animal}}</td>
        <td>{{$animals_adoptions->location_address}}</td>
        <td>

         {{--  <form action="{{route('AdminPP.destroy',$animals_adoptions->id)}}" method="POST">
          <a  href="/AdminPP/{{$animals_adoptions->id}}/edit" class="btn btn-info">Editar</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Borrar</button>
          </form> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
</table>

@endsection

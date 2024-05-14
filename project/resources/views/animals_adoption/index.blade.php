@extends('layouts.dashboard')
@section('css')
  <link href="https://cdn.datatables.net/2.0.6/css/dataTables.bootstrap5.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@endsection

@section('content')

<a href="AdminPP/create"  class="btn btn-primary">CREAR</a>
<table id='adopciones' class="table table-dark table-bordered shadow-lg mt-4" style="width:100%">
  <thead clase="bg-primary text-white">
    <tr>
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
      @foreach ($animals_adoption as $animals_adoptions)
      <tr>
        <td>{{$animals_adoptions->id}}</td>
        <td>{{$animals_adoptions->name}}</td>
        <td>{{$animals_adoptions->species}}</td>
        <td>{{$animals_adoptions->animal_race}}</td>
        <td>{{$animals_adoptions->sex_animal}}</td>
        <td>{{$animals_adoptions->age_animal}}</td>
        <td>{{$animals_adoptions->descriptions_animals}}</td>
        <td>{{$animals_adoptions->photo_animal}}</td>
        <td>{{$animals_adoptions->location_addres}}</td>
        <td>

          <form action="{{route('AdminPP.destroy',$animals_adoptions->id)}}" method="POST">
          <a  href="/AdminPP/{{$animals_adoptions->id}}/edit" class="btn btn-info">Editar</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Borrar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
  @section('js')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.6/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.6/js/dataTables.bootstrap5.js"></script>

  <script>
  $(document).ready(function(){
    $('#adopciones').DataTable({
      "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
    });
  });
  </script>
  @endsection

@endsection

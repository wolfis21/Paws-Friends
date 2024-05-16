@extends('layouts.dashboard')

@section('css')
  <link href="https://cdn.datatables.net/2.0.6/css/dataTables.bootstrap5.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@endsection

@section('content')
<a href="AdminP/create"  class="btn btn-primary">CREAR</a>
<table id='adopciones' class="table table-dark table-bordered shadow-lg mt-4" style="width:100%">
  <thead clase="bg-primary text-white">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>  
      <th scope="col">DNI</th>
      <th scope="col">TELEFONO</th>
      <th scope="col">solicitud</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>  
    <tbody>
      @foreach ($FormularioAdopciones as $FormularioAdopcion)
      <tr>
        <td>{{$FormularioAdopcion->id}}</td>
        <td>{{$FormularioAdopcion->nombre}}</td>
        <td>{{$FormularioAdopcion->apellido}}</td>
        <td>{{$FormularioAdopcion->Dni}}</td>
        <td>{{$FormularioAdopcion->telefono}}</td>
        <td>{{$FormularioAdopcion->solicitud}}</td>
        <td>

          <form action="{{route('AdminP.destroy',$FormularioAdopcion->id)}}" method="POST">
          <a  href="/AdminP/{{$FormularioAdopcion->id}}/edit" class="btn btn-info">Editar</a>
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

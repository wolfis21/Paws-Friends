@extends('layouts.dashboard')

@section('content')
<h2>EDITAR REGISTRO</h2>

<form action="/AdminP/{{$FormularioAdopcion->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3 mt-3">
    <label for="ID" class="form-label" >ID:</label>
    <input type="text" class="form-control" id="id" placeholder="id" name="id"  value="{{$FormularioAdopcion->id}}" disabled >
  </div>


  <div class="mb-3 mt-3">
    <label for="nombre" class="form-label"  >NOMBRE:</label>
    <input type="string" class="form-control" id="nombre" placeholder="Enter nombre" name="nombre"  value="{{$FormularioAdopcion->nombre}}" required>
  </div>


  <div class="mb-3 mt-3">
    <label for="apellido" class="form-label" >APELLIDO:</label>
    <input type="string" class="form-control" id="apellido" placeholder="Enter apellido" name="apellido"  value="{{$FormularioAdopcion->apellido}}" required>
  </div>


  <div class="mb-3">
    <label for="Dni" class="form-label" >DNI:</label>
    <input type="file" class="form-control" id="Dni" placeholder="Enter Dni" name="Dni"   value="{{$FormularioAdopcion->Dni}}" required>
  </div>


    <div class="mb-3">
    <label for="telefono" class="form-label">TELEFONO:</label>
    <input type="string" class="form-control" id="telefono" placeholder="Enter telefono" name="telefono"  value="{{$FormularioAdopcion->telefono}}" required>
  </div>


  <a href="/AdminP" class="btn btn-danger" tabindex="5" >Cancelar</a>
  <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
  

</form>
@endsection
@extends('layouts.dashboard')

@section('content')
<h2>CREAR REGISTRO</h2>

<form action="/AdminP" method="POST">
  @csrf
  <div class="mb-3 mt-3">
    <label for="ID" class="form-label" >ID:</label>
    <input type="text" class="form-control" id="ID" placeholder="ID" disabled name="ID" required >
  </div>


  <div class="mb-3 mt-3">
    <label for="nombre" class="form-label"  >NOMBRE:</label>
    <input type="string" class="form-control" id="nombre" placeholder="Enter nombre" name="nombre" required >
  </div>


  <div class="mb-3 mt-3">
    <label for="apellido" class="form-label" >APELLIDO:</label>
    <input type="string" class="form-control" id="apellido" placeholder="Enter apellido" name="apellido" required >
  </div>


  <div class="mb-3">
    <label for="Dni" class="form-label" >DNI:</label>
    <input type="file" class="form-control" id="Dni" placeholder="Enter Dni" name="Dni" required >
  </div>


    <div class="mb-3">
    <label for="telefono" class="form-label">TELEFONO:</label>
    <input type="string" class="form-control" id="telefono" placeholder="Enter telefono" name="telefono" required >
  </div>

    <div class="mb-3">
    <label for="solicitud" class="form-label">solicitud:</label>
      <select id="solicitud" name="solicitud" placeholder="solicitud" required>
      <option value="Aceptar">Aceptar</option>
      <option value="Negado">Negado</option>
      </select>
  </div>



  <a href="/AdminP" class="btn btn-primary" tabindex="6" >Volver</a>
  <a href="/AdminP/create" class="btn btn-danger" tabindex="5" >Cancelar</a>
  <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
  

</form>
@endsection
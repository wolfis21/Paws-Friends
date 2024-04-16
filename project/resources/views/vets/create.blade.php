@extends('layouts.example')

@section('content')
<h1>Crear Vets</h1>
<form method="POST" action="{{ route('vets.store') }}">  
    @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="name" name="name" placeholder="Jose Garcia">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Jose Garcia">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Telefono</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Jose Garcia">
  </div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="example@tumama">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">link_ref</label>
    <input type="text" class="form-control" id="link_ref" name="link_ref" placeholder="Jose Garcia">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Img_ref</label>
    <input type="text" class="form-control" id="img_ref" name="img_ref" placeholder="Jose Garcia">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Especialidad</label>
    <input type="text" class="form-control" id="specialist_animals" name="specialist_animals" placeholder="Otorrino">
</div>
<div class="mb-3">
  <a class="btn btn-danger" href="vets">Cancelar</a>
  <button class="btn btn-primary">Guardar</button>
</div>  


</form>
@endsection
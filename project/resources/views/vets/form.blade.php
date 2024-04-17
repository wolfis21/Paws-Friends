<?php
$isEdit = true
?>

<div class="mb-3">
    <label for="Nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Jose Garcia" value="{{($veterinarian->name)}}">
  </div>
  <div class="mb-3">
      <label for="Direccion" class="form-label">Direccion</label>
      <input type="text" class="form-control @error('address') is-invalid @enderror " id="address" name="address" placeholder="Jose Garcia" value="{{($veterinarian->address)}}">
    </div>
    <div class="mb-3">
      <label for="Telefono" class="form-label">Telefono</label>
      <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Jose Garcia" value="{{($veterinarian->phone)}}">
    </div>
  <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="example@tumama" value="{{($veterinarian->email)}}">
  </div>
  <div class="mb-3">
      <label for="link_ref" class="form-label">link_ref</label>
      <input type="text" class="form-control @error('link_ref') is-invalid @enderror" id="link_ref" name="link_ref" placeholder="Jose Garcia" value="{{($veterinarian->link_ref)}}">
  </div>
  <div class="mb-3">
      <label for="Img" class="form-label">Img_ref</label>
      <input type="text" class="form-control @error('img_ref') is-invalid @enderror" id="img_ref" name="img_ref" placeholder="Jose Garcia" value="{{($veterinarian->img_ref)}}">
  </div>
  <div class="mb-3">
      <label for="Especialidad" class="form-label">Especialidad</label>
      <input type="text" class="form-control @error('specialist_animals') is-invalid @enderror" id="specialist_animals" name="specialist_animals" placeholder="Otorrino" value="{{($veterinarian->specialist_animals)}}">
  </div>
  <div class="mb-3">
    <a class="btn btn-danger" href="{{route('vets.index')}}">Cancelar</a>
    <button class="btn btn-primary">Guardar</button>
  </div>  
  
  @error('phone')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
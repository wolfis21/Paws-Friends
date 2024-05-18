@extends('layouts.dashboard')

@section('content')
<h2>CREAR REGISTRO DE ANIMAL</h2>

<form method="POST" action="{{ route('adopciones.store') }}" enctype="multipart/form-data">
  @csrf

  <div class="mb-3 mt-3">
    <label for="name" class="form-label"  >Nombre:</label>
    <input type="text" class="form-control" id="name" placeholder="Ingrese nombre" name="name"  required>
  </div>

  <div class="mb-3 mt-3">
    <label for="species" class="form-label" >Specie:</label>
    <input type="text" class="form-control" id="species" placeholder="Ingrese species" name="species" required>
  </div>


  <div class="mb-3">
    <label for="animal_race" class="form-label" >Raza:</label>
    <input type="text" class="form-control" id="animal_race" placeholder="Ingrese animal_race" name="animal_race"  required>
  </div>


    <div class="mb-3">
    <label for="sex_animal" class="form-label">Sexo:</label>
    <input type="text" class="form-control" id="sex_animal" placeholder="Ingrese sex_animal" name="sex_animal"  required>
  </div>

      <div class="mb-3">
    <label for="age_animal" class="form-label">Edad:</label>
    <input type="text" class="form-control" id="age_animal" placeholder="Ingrese age_animal" name="age_animal"   required>
  </div>

      <div class="mb-3">
    <label for="descriptions_animals" class="form-label">Descripcion:</label>
    <input type="text" class="form-control" id="description_animals" placeholder="Ingrese descriptions_animals" name="description_animals" required>
  </div>

      <div class="mb-3">
    <label for="photo_animal" class="form-label">Foto:</label>
    <input type="file" class="form-control" id="photo_animal" placeholder="Ingrese photo_animal" name="photo_animal"required>
  </div>

      <div class="mb-3">
    <label for="location_addres" class="form-label">Locacion de animal:</label>
    <input type="text" class="form-control" id="location_address" placeholder="Ingrese locacion" name="location_address"required>
  </div>

  <a href="{{ route('adopciones.index') }}" class="btn btn-red" tabindex="6" >Volver</a>
  <button type="submit" class="btn bg-purple" tabindex="4">Guardar</button>
  

</form>
@endsection
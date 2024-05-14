@extends('layouts.dashboard')

@section('content')
<form action="/AdminPP" method="POST">
  @csrf
  <div class="mb-3 mt-3">
    <label for="ID" class="form-label" >ID:</label>
    <input type="text" class="form-control" id="ID" placeholder="ID" disabled name="ID" required >
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label"  >name:</label>
    <input type="string" class="form-control" id="name" placeholder="Enter nombre" name="name"  required>
  </div>


  <div class="mb-3 mt-3">
    <label for="species" class="form-label" >specias:</label>
    <input type="string" class="form-control" id="species" placeholder="Enter species" name="species" required>
  </div>


  <div class="mb-3">
    <label for="animal_race" class="form-label" >animal_race:</label>
    <input type="string" class="form-control" id="animal_race" placeholder="Enter animal_race" name="animal_race"  required>
  </div>


    <div class="mb-3">
    <label for="sex_animal" class="form-label">sex_animal:</label>
    <input type="string" class="form-control" id="sex_animal" placeholder="Enter sex_animal" name="sex_animal"  required>
  </div>

      <div class="mb-3">
    <label for="age_animal" class="form-label">age_animal:</label>
    <input type="string" class="form-control" id="age_animal" placeholder="Enter age_animal" name="age_animal"   required>
  </div>

      <div class="mb-3">
    <label for="descriptions_animals" class="form-label">descriptions_animals:</label>
    <input type="string" class="form-control" id="descriptions_animals" placeholder="Enter descriptions_animals" name="descriptions_animals" required>
  </div>

      <div class="mb-3">
    <label for="photo_animal" class="form-label">photo_animal:</label>
    <input type="file" class="form-control" id="photo_animal" placeholder="Enter photo_animal" name="photo_animal"required>
  </div>

        <div class="mb-3">
    <label for="location_addres" class="form-label">location_addres:</label>
    <input type="string" class="form-control" id="location_addres" placeholder="Enter location_addres" name="location_addres"required>
  </div>

  <a href="/AdminPP" class="btn btn-primary" tabindex="6" >Volver</a>
  <a href="/AdminPP/create" class="btn btn-danger" tabindex="5" >Cancelar</a>
  <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
  

</form>
@endsection
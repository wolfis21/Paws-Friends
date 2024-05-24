@extends('layouts.plantillaBase')

@section('contenido')
    <h2>EDITAR REGISTRO</h2>

    <form action="/AdminPP/{{ $animals_adoptions->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="id" class="form-label">id:</label>
            <input type="text" class="form-control" id="id" placeholder="id" name="id"
                value="{{ $animals_adoptions->id }}" disabled>
        </div>

        <div class="mb-3 mt-3">
            <label for="name" class="form-label">name:</label>
            <input type="string" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="Enter nombre" name="name" value="{{ $animals_adoptions->name }}" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3 mt-3">
            <label for="species" class="form-label">specias:</label>
            <input type="string" class="form-control @error('species') is-invalid @enderror" id="species"
                placeholder="Enter species" name="species" value="{{ $animals_adoptions->species }}" required>
            @error('species')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="animal_race" class="form-label">animal_race:</label>
            <input type="string" class="form-control @error('animal_race') is-invalid @enderror" id="animal_race"
                placeholder="Enter animal_race" name="animal_race" value="{{ $animals_adoptions->animal_race }}" required>
            @error('animal_race')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sex_animal" class="form-label">sex_animal:</label>
            <input type="string" class="form-control @error('sex_animal') is-invalid @enderror" id="sex_animal"
                placeholder="Enter sex_animal" name="sex_animal" value="{{ $animals_adoptions->sex_animal }}" required>
            @error('sex_animal')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="age_animal" class="form-label">age_animal:</label>
            <input type="string" class="form-control @error('age_animal') is-invalid @enderror" id="age_animal"
                placeholder="Enter age_animal" name="age_animal" value="{{ $animals_adoptions->age_animal }}" required>
            @error('age_animal')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="descriptions_animals" class="form-label">descriptions_animals:</label>
            <input type="string" class="form-control @error('descriptions_animals') is-invalid @enderror"
                id="descriptions_animals" placeholder="Enter descriptions_animals" name="descriptions_animals"
                value="{{ $animals_adoptions->descriptions_animals }}" required>
            @error('descriptions_animals')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="photo_animal" class="form-label">photo_animal:</label>
            <input type="file" class="form-control @error('photo_animal') is-invalid @enderror" id="photo_animal"
                placeholder="Enter photo_animal" name="photo_animal" value="{{ $animals_adoptions->photo_animal }}"
                required>
            @error('photo_animal')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="location_addres" class="form-label">location_addres:</label>
            <input type="string" class="form-control @error('location_addres') is-invalid @enderror" id="location_addres"
                placeholder="Enter location_addres" name="location_addres"
                value="{{ $animals_adoptions->location_addres }}" required>
            @error('location_addres')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <a href="/AdminPP" class="btn btn-danger" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>


    </form>
@endsection

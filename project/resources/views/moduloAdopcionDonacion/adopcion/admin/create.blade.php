@extends('layouts.dashboard')

@section('content')
    <h2>CREAR REGISTRO DE ANIMAL</h2>

    <form method="POST" action="{{ route('adopciones.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="Ingrese nombre" name="name"  value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 mt-3">
            <label for="species" class="form-label">Specie:</label>
            <input type="text" class="form-control @error('species') is-invalid @enderror" id="species"
                placeholder="Ingrese species" name="species"  value="{{ old('species') }}">
            @error('species')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="animal_race" class="form-label">Raza:</label>
            <input type="text" class="form-control @error('animal_race') is-invalid @enderror" id="animal_race"
                placeholder="Ingrese animal_race" name="animal_race"  value="{{ old('animal_race') }}">
            @error('animal_race')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sex_animal" class="form-label">Sexo:</label>
            <input type="text" class="form-control @error('sex_animal') is-invalid @enderror" id="sex_animal"
                placeholder="Ingrese sex_animal" name="sex_animal"  value="{{ old('sex_animal') }}">
            @error('sex_animal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="age_animal" class="form-label">Edad:</label>
            <input type="text" class="form-control @error('age_animal') is-invalid @enderror" id="age_animal"
                placeholder="Ingrese age_animal" name="age_animal"  value="{{ old('age_animal') }}">
            @error('age_animal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="descriptions_animals" class="form-label">Descripcion:</label>
            <input type="text" class="form-control @error('descriptions_animals') is-invalid @enderror"
                id="description_animals" placeholder="Ingrese descriptions_animals" name="description_animals" 
                value="{{ old('descriptions_animals') }}">
            @error('descriptions_animals')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="photo_animal" class="form-label">Foto:</label>
            <input type="file" class="form-control @error('photo_animal') is-invalid @enderror" id="photo_animal"
                placeholder="Ingrese photo_animal" name="photo_animal"  value="{{ old('photo_animal') }}">
            @error('photo_animal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="location_addres" class="form-label">Locacion de animal:</label>
            <input type="text" class="form-control @error('location_address') is-invalid @enderror" id="location_address"
                placeholder="Ingrese locacion" name="location_address"  value="{{ old('location_address') }}">
            @error('location_address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <input type="hidden" name="status" id="status" value="Sin solicitud / Sin adoptar">
        <input type="hidden" class="form-control" id="users_id" name="users_id" value="{{Auth::user()->id}}"/>

        <a href="{{ route('adopciones.index') }}" class="btn btn-red" tabindex="6">Volver</a>
        <button type="submit" class="btn bg-purple" tabindex="4">Guardar</button>


    </form>
@endsection

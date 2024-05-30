@extends('layouts.dashboard')
@section('title', 'Crear Alojamiento')
@section('content')
    <h1>Añadir Alojamiento</h1>
    <form method="POST" action="{{ route('storeHousing') }}" role="form" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Ingrese nombre" value="{{ old('name') }}">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
                placeholder="Ingrese direccion" value="{{ old('address') }}">
            @error('address')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                placeholder="Example: 04141912013" value="{{ old('phone') }}">
            @error('phone')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Localizacion" class="form-label">Localizacion</label>
            <input type="text" class="form-control @error('description_location') is-invalid @enderror"
                id="description_location" name="description_location" placeholder="Ingrese ubicacion"
                value="{{ old('description_location') }}">
            @error('description_location')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Tipo_de_animal" class="form-label">Tipo de animal</label>
            <select id="type_animals" name="type_animals" class="form-select">
                <option value="">Seleccione un tipo de animal</option>
                <option value="Perro">Perro</option>
                <option value="Gato">Gato</option>
                <option value="Gato">Roedor</option>
                <option value="Gato">Ave</option>
                <option value="Gato">Reptil</option>
                <option value="Gato">Pescado</option>
                <option value="Otros">Otros</option>
            </select>
            @error('type_animals')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Oferta_de_comida" class="form-label">Ofertas de comida</label>
            <input type="text" class="form-control @error('food_offer') is-invalid @enderror" id="food_offer"
                name="food_offer" placeholder="Ingrese nombre" value="{{ old('food_offer') }}">
            @error('food_offer')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Img_ref" class="form-label">Img_ref</label>
            <input type="file" class="form-control @error('img_ref') is-invalid @enderror" id="img_ref" name="img_ref"
                accept="image/*">
            @error('img_ref')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <a class="btn bg-red" href="{{ route('housingAdmin') }}">Cancelar</a>
            <button class="btn bg-cyan">Guardar</button>
        </div>
    </form>
@endsection

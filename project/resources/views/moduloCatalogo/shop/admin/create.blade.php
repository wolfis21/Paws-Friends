@extends('layouts.dashboard')
@section('title', 'Crear Tienda')
@section('content')
<h1>Añadir Tienda</h1>
    <form method="POST" action="{{ route('storeShop') }}" role="form" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Ingrese nombre" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Direccion</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
                placeholder="Ingrese direccion" value="{{ old('address') }}">
                @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telefono</label>
            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone"
                name="phone" placeholder="Ingrese telefono" value="{{ old('phone') }}">
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="link_ref" class="form-label">Link de Referencia</label>
            <input type="text" class="form-control @error('link_ref') is-invalid @enderror" id="link_ref" name="link_ref"
                placeholder="Ingrese link" value="{{ old('link_ref') }}">
                @error('link_ref')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Img" class="form-label">Imagen de Referencia</label>
            <input type="file" class="form-control @error('img_ref') is-invalid @enderror" id="img_ref" name="img_ref"
                value="{{ old('img_ref') }}" accept="image/*">
                @error('img_ref')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <a class="btn bg-red" href="{{ route('shopAdmin') }}">Cancelar</a>
            <button class="btn bg-green">Guardar</button>
        </div>

    </form>
@endsection
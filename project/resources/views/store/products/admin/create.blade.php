@extends('layouts.dashboard')
@section('title', 'Crear Post')
@section('content')
<h1>Añadir Producto</h1>
    <form method="POST" action="{{ route('storeProduct') }}" role="form" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Ingrese nombre" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripcion</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                placeholder="Ingrese descripcion" value="{{ old('description') }}">
        </div>
        <div class="mb-3">
            <label for="product_category_animals_id" class="form-label">Categoria del producto</label>
            <select id="product_category_animals_id" name="product_category_animals_id" class="form-select">
                    <option value="1">Perros</option>
                    <option value="2">Gatos</option>
                    <option value="3">Roedores</option>
                    <option value="4">Aves</option>
                    <option value="5">Peces</option>
                    <option value="6">Reptiles</option>
            </select>
        </div>
        {{-- <div class="mb-3">
            <label for="phone" class="form-label">Telefono Movil</label>
            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone"
                name="phone" placeholder="Ingrese nombre" value="{{ old('phone') }}">
        </div> --}}
        <div class="mb-3">
            <label for="img_ref" class="form-label">Foto</label>
            <input type="file" class="form-control @error('img_ref') is-invalid @enderror" id="img_ref" name="img_ref"
            value="{{ old('img_ref') }}" accept="image/*">
        </div>
        <div class="mb-3">
            <a class="btn bg-red" href="{{ route('productAdmin') }}">Cancelar</a>
            <button class="btn bg-green">Guardar</button>
        </div>

        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </form>
@endsection
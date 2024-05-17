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
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Direccion</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
                placeholder="Ingrese direccion" value="{{ old('address') }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telefono</label>
            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone"
                name="phone" placeholder="Ingrese telefono" value="{{ old('phone') }}">
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Email</label>
            <input type="text" class="form-control @error('mail') is-invalid @enderror" id="mail" name="mail"
                placeholder="Ingrese email" value="{{ old('mail') }}">
        </div>
        <div class="mb-3">
            <label for="link_ref" class="form-label">Redes sociales</label>
            <input type="text" class="form-control @error('link_ref') is-invalid @enderror" id="link_ref" name="link_ref"
                placeholder="Ingrese link" value="{{ old('link_ref') }}">
        </div>
        <div class="mb-3">
            <a class="btn bg-red" href="{{ route('shopAdmin') }}">Cancelar</a>
            <button class="btn bg-green">Guardar</button>
        </div>

        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </form>
@endsection
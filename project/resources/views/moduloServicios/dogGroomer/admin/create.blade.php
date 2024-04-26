@extends('dashboard')
@section('title', 'Crear Peluqueria')
@section('content')
    <h1>Añadir Peluqueria</h1>
    <form method="POST" action="{{ route('storeDogGroomer') }}" role="form" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        @csrf
        @php
            $isEdit = false;
        @endphp
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Ingrese el nombre" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">direccion</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
                placeholder="Ingrese la direccion" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telefono</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                placeholder="Ingrese el telefono" {{ old('phone') }}>
        </div>
        <div class="mb-3">
            <label for="link_ref" class="form-label">link_ref</label>
            <input type="text" class="form-control @error('link_ref') is-invalid @enderror" id="link_ref"
                name="link_ref" placeholder="Ingrese el url o link" value="{{ old('link_ref') }}">
        </div>
        <div class="mb-3">
            <label for="Img" class="form-label">Img_ref</label>
            <input type="text" class="form-control @error('img_ref') is-invalid @enderror" id="img_ref" name="img_ref"
                placeholder="Imagen" value="{{ old('img_ref') }}">
        </div>
        <div class="mb-3">
            <a class="btn btn-danger" href="{{ route('dogGroomerAdmin') }}">Cancelar</a>
            <button class="btn btn-primary">Guardar</button>
        </div>

        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </form>
@endsection

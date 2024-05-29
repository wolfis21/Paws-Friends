@extends('layouts.dashboard')
@section('title', 'Crear category')
@section('content')
    <h1>Añadir category</h1>
    <form method="POST" action="{{ route('categoryProducts.store') }}" role="form" enctype="multipart/form-data">
        {{-- {{ method_field('p') }} --}}
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
            <a class="btn bg-red" href="{{ route('index') }}">Cancelar</a>
            <button class="btn bg-green">Guardar</button>
        </div>

    </form>
@endsection

@extends('layouts.dashboard')
@section('title', 'Crear Post')
@section('content')
<h1>Añadir Post</h1>
    <form method="POST" action="{{ route('storePost') }}" role="form" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                placeholder="Ingrese titulo" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="post_content" class="form-label">Contenido del post</label>
            <input type="text" class="form-control @error('post_content') is-invalid @enderror" id="post_content" name="post_content"
                placeholder="Ingrese contenido" value="{{ old('post_content') }}">
        </div>
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
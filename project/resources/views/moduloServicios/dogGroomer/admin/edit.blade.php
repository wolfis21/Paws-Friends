@extends('layouts.dashboard')
@section('title', 'Editar Peluqueria')
@section('content')
<h1>Editar Peluqueria</h1>
    <form method="POST" action="{{ route('updateDogGroomer', $dogGroomer->id) }}" role="form" enctype="multipart/form-data">  
        {{ method_field('PUT') }}
        @csrf

        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Ingrese el nombre" value="{{ $dogGroomer->name }}">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">direccion</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
                placeholder="Ingrese la direccion" value="{{ $dogGroomer->address }}">
            @error('address')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                placeholder="Example: 04141912013" value="{{ $dogGroomer->phone }}">
            @error('phone')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="link_ref" class="form-label">link_ref</label>
            <input type="text" class="form-control @error('link_ref') is-invalid @enderror" id="link_ref"
                name="link_ref" placeholder="Ingrese el url o link" value="{{ $dogGroomer->link_ref }}">
            @error('link_ref')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Img" class="form-label">Img_ref</label>
            <input type="file" class="form-control @error('img_ref') is-invalid @enderror" id="img_ref" name="img_ref"
                accept="image/*">
            @error('img_ref')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="mb-3">
            <a class="btn bg-red" href="{{route('dogGroomerAdmin')}}">Cancelar</a>
            <button class="btn bg-cyan">Guardar</button>
          </div>  
          
    </form>
@endsection
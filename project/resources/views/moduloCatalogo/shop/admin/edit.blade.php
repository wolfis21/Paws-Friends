@extends('layouts.dashboard')
@section('title', 'Editar Tienda')
@section('content')
<h1>Editar Tienda</h1>
    <form method="POST" action="{{ route('updateShop', $shop->id) }}" role="form" enctype="multipart/form-data">  
        {{ method_field('PUT') }}
        @csrf

        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                placeholder="Ingrese el nombre" value="{{ $shop->name }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Direccion</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
                placeholder="Ingrese la direccion" value="{{ $shop->address }}">
                @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telefono</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                placeholder="04141912013" value="{{ $shop->phone }}">
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="link_ref" class="form-label">link_ref</label>
            <input type="text" class="form-control @error('link_ref') is-invalid @enderror" id="link_ref"
                name="link_ref" placeholder="Ingrese el url o link" value="{{ $shop->link_ref }}">
                @error('link_ref')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror        
            </div>
        <div class="mb-3">
            <label for="Img" class="form-label">Img_ref</label>
            <input type="file" class="form-control @error('img_ref') is-invalid @enderror" id="img_ref" name="img_ref"
                value="{{ $shop->img_ref }}" accept="image/*">
                @error('img_ref')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
        <div class="mb-3">
            <a class="btn bg-red" href="{{route('shopAdmin')}}">Cancelar</a>
            <button class="btn bg-green">Guardar</button>
          </div>  

    </form>
@endsection
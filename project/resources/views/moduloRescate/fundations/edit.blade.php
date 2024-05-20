{{-- @extends('layouts.example') --}}
@extends('layouts.dashboard')
@section('title', 'Editar Fundación')
@section('content')
    <h1>Editar Fundación</h1>
    <form method="POST" action="{{ route('fundations.update',  $fundation->id) }}"  role="form" enctype="multipart/form-data">
        {{ method_field('PUT') }}      
        @csrf

        <div class="mb-3">
          <label for="Nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control " id="name" name="name"
              placeholder="Nombre" value="{{($fundation->name)}}" required>
      </div>
      <div class="mb-3">
          <label for="Telefono" class="form-label">Telefono</label>
          <input type="text" class="form-control " id="phone" name="phone"
              placeholder="Teléfono" value="{{($fundation->phone)}}" required>
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email"
              placeholder="example@gmail.com" value="{{($fundation->email)}}" required>
      </div>
      <div class="mb-3">
          <label for="Descripcion" class="form-label">Descripcion</label>
          <input type="text" class="form-control " id="description" name="description"
              placeholder="Descripción" value="{{($fundation->description)}}" required>
      </div>

          <div class="mb-3">
            <a class="btn btn-danger" href="{{route('fundations.index')}}">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>  
          
    </form>
    
@endsection
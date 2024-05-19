{{-- @extends('layouts.example') --}}
@extends('layouts.dashboard')
@section('title', 'Editar Demanda')
@section('content')
    <h1>Editar Demanda</h1>
    <form method="POST" action="{{ route('historial_admin.update',  $demand->id) }}"  role="form" enctype="multipart/form-data">
        {{ method_field('PUT') }}      
        @csrf

        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="users_name" name="users_name" value="{{ $demand->user->name}}" readonly>
            <input type="hidden" id="users_id" name="users_id" value="{{ $demand->user->id }}"> 
        </div>

        <div class="mb-3">
            <label for="Descripción" class="form-label">Descripción de la situación</label>
            <input type="text" class="form-control" id="description_case" name="description_case" value="{{ $demand->description_case}}" readonly>
            <input type="hidden" id="description_case" name="description_case" value="{{ $demand->description_case }}"> 
        </div>

        <div class="mb-3">
            <label for="Dirección" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="adress_animals" name="adress_animals" value="{{ $demand->adress_animals}}" readonly>
            <input type="hidden" id="adress_animals" name="adress_animals" value="{{ $demand->adress_animals }}"> 
        </div>

        <input type="hidden" id="photo_ref" name="photo_ref" value="{{ $demand->photo_ref }}"> 

        <div class="mb-3">
            <label for="motivo" class="form-label">Motivo de la demanda</label>
            <input type="text" class="form-control" id="motivo" name="motivo" value="{{ $demand->motivo->name}}" readonly>
            <input type="hidden" id="motivo_id" name="motivo_id" value="{{ $demand->motivo->id }}"> 
        </div>

        <div class="mb-3">
            <label for="urgencia" class="form-label">Urgencia de la demanda</label>
            <input type="text" class="form-control" id="urgencia" name="urgencia" value="{{ $demand->urgencia->name}}" readonly>
            <input type="hidden" id="urgencia_id" name="urgencia_id" value="{{ $demand->urgencia->id }}"> 
        </div>

        <div class="mb-3">
            <label for="status_demanda" class="form-label">Status de la Demanda</label>
            <input type="text" class="form-control" id="types_status_id" name="types_status_id" value="{{ $demand->types_status->name }}" readonly>
            <select name="types_status_id" class="form-control" required>
                <option value="">Selecciona un status</option>
                @foreach ($type as $types_status)
                    <option value="{{ $types_status->id }}">{{ $types_status->name }}</option>
                @endforeach
            </select>
        </div>
        
        <input type="hidden" class="form-control" id="statusfund_id" name="statusfund_id" value="{{ ($demand->statusfund->id) }}">
        
        
          <div class="mb-3">
            <a class="btn btn-danger" href="{{route('historial_admin.index')}}">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>  
          
          @error('phone')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

    </form>
    
@endsection
{{-- @extends('layouts.example') --}}
@extends('moduloRescate.dashboard')
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
            <input type="text" class="form-control @error('description_case') is-invalid @enderror" id="description_case" name="description_case"
                placeholder="Redacta tu denuncia" value="{{($demand->description_case) }}">
        </div>
        
        <div class="mb-3">
            <label for="Dirección" class="form-label">Dirección</label>
            <input type="text" class="form-control @error('adress_animals') is-invalid @enderror" id="adress_animals" name="adress_animals"
                placeholder="Lugar del suceso" value="{{ ($demand->adress_animals)}}">
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen:</label>
            <input type="text" class="form-control @error('photo_ref') is-invalid @enderror" id="photo_ref" name="photo_ref"
                placeholder="Seleccionar archivo" value="{{ ($demand->photo_ref) }}">
        </div>
        <div class="mb-3">
            <label for="motivo" class="form-label">Motivo de la demanda</label>
            <select name="motivo_id" class="form-control">
                <option value="">Selecciona un motivo</option>
                @foreach ($motivos as $motivo)
                    <option value="{{ $motivo->id }}">{{ $motivo->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="urgencia" class="form-label">Urgencia de la demanda</label>
            <select name="urgencia_id" class="form-control">
                <option value="">Selecciona una urgencia</option>
                @foreach ($urgencias as $urgencia)
                    <option value="{{ $urgencia->id }}">{{ $urgencia->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="status_demanda" class="form-label">Status de la Demanda</label>
            <select name="types_status_id" class="form-control">
                <option value="">Selecciona un status</option>
                @foreach ($type as $types_status)
                    <option value="{{ $types_status->id }}">{{ $types_status->name }}</option>
                @endforeach
            </select>
        </div>
        
        {{-- Al registrar se coloca por defecto "no asignada" id=2 --}}
        <input type="hidden" class="form-control" id="statusfund_id" name="statusfund_id" value="2">
        
        
          <div class="mb-3">
            <a class="btn btn-danger" href="{{route('historial_admin.index')}}">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>  
          
          @error('phone')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

    </form>
    
@endsection
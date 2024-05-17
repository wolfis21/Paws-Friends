{{-- @extends('layouts.example') --}}
@extends('moduloRescate.dashboard')
@section('title', 'Editar Status')
@section('content')
    <h1>Editar Status</h1>
    <form method="POST" action="{{ route('contactarfundaciones.update',  $demand_animal_has_fundation->id) }}"  role="form" enctype="multipart/form-data">
        {{ method_field('PUT') }}      
        @csrf

        <div class="mb-3">
            <label for="demands_animalss" class="form-label">Demanda</label>
            <input type="text" class="form-control" id="demands_animals_description_case" name="demands_animals_description_case" value="{{ $demand_animal_has_fundation->demands_animalss->description_case }}" readonly>
            <input type="hidden" id="demands_animals_id" name="demands_animals_id" value="{{ $demand_animal_has_fundation->demands_animalss->id }}"> 
        </div>
        
        <div class="mb-3">
            <label for="fundation" class="form-label">Fundación</label>
            <input type="text" class="form-control" id="fundation_name" name="fundation_name" value="{{ $demand_animal_has_fundation->fundation->name }}" readonly>
            <input type="hidden" id="fundation_id" name="fundation_id" value="{{ $demand_animal_has_fundation->fundation->id }}">
        </div>
        
        
        <div class="mb-3">
            <label for="demand_animal_has_fundation" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descrption" name="description" value="{{ $demand_animal_has_fundation->description }}" readonly>
        </div>

        <div class="mb-3">
            <label for="statusfund_id" class="form-label">Status Fundación</label>
            <select name="statusfund_id" class="form-control">
                <option value="">Selecciona un status fundación</option>
                @foreach ($status as $statusfund)
                    <option value="{{ $statusfund->id }}">{{ $statusfund->name }}</option>
                @endforeach
            </select>
        </div>

          <div class="mb-3">
            <a class="btn btn-danger" href="{{route('contactarfundaciones.index')}}">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>  
          
          @error('phone')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

    </form>
    
@endsection
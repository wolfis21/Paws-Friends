<div class="mb-3">
    <label for="demands_animalss" class="form-label">Demanda</label>
    <select name="demands_animals_id" class="form-control">
        <option value="">Selecciona una demanda</option>
        @foreach ($demand as $demands_animals)
            <option value="{{ $demands_animals->id }}">{{ $demands_animals->description_case }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="fundation" class="form-label">Fundación</label>
    <select name="fundation_id" class="form-control">
        <option value="">Selecciona una fundación</option>
        @foreach ($fundations as $fundation)
            <option value="{{ $fundation->id }}">{{ $fundation->name }}</option>
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label for="description" class="form-label">Descripcion</label>
    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
        placeholder="Descripción" value="{{ old('description') }}">
</div>
{{-- 
Al registrar se coloca por defecto "en espera" id=1 --}}
<input type="hidden" class="form-control" id="statusfund_id" name="statusfund_id" value="{{($demands_animals->statusfund->id)}}">


<div class="mb-3">
    <a class="btn btn-danger" href="{{ route('contactarfundaciones.index') }}">Cancelar</a>
    <button type="submit"  class="btn btn-primary">Enviar</button>
</div>

@error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

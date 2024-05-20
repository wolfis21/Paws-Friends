<div class="mb-3">
    <label for="usuario" class="form-label">Usuario</label>
    <select name="users_id" class="form-control" required>
        <option value="">Selecciona un usuario</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="Descripción" class="form-label">Descripción de la situación</label>
    <input type="text" class="form-control @error('description_case') is-invalid @enderror" id="description_case" name="description_case"
        placeholder="Redacta tu denuncia" value="{{ old('description_case') }}" required>
</div>

<div class="mb-3">
    <label for="Dirección" class="form-label">Dirección</label>
    <input type="text" class="form-control @error('adress_animals') is-invalid @enderror" id="adress_animals" name="adress_animals"
        placeholder="Lugar del suceso" value="{{ old('adress_animals') }}" required>
</div>
<div class="mb-3">
    <label for="imagen" class="form-label">Imagen:</label>
    <input type="file" id="photo_ref" name="photo_ref" accept="image/*" placeholder="Seleccionar archivo" value="{{ old('photo_ref') }}" required> 
</div>
<div class="mb-3">
    <label for="motivo" class="form-label">Motivo de la demanda</label>
    <select name="motivo_id" class="form-control" required>
        <option value="">Selecciona un motivo</option>
        @foreach ($motivos as $motivo)
            <option value="{{ $motivo->id }}">{{ $motivo->name }}</option>
        @endforeach
    </select>
    @error('motivo')
        <br>
            <span>*{{$message}}</span>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="urgencia" class="form-label">Urgencia de la demanda</label>
    <select name="urgencia_id" class="form-control" required>
        <option value="">Selecciona una urgencia</option>
        @foreach ($urgencias as $urgencia)
            <option value="{{ $urgencia->id }}">{{ $urgencia->name }}</option>
        @endforeach
    </select>
    @error('urgencia')
    <br>
        <span>*{{$message}}</span>
    <br>
@enderror
</div>

{{-- Al registrar se coloca por defecto "en espera" id=1 --}}
<input type="hidden" class="form-control" id="types_status_id" name="types_status_id" value="1">

{{-- Al registrar se coloca por defecto "no asignada" id=2 --}}
<input type="hidden" class="form-control" id="statusfund_id" name="statusfund_id" value="2">





<div class="mb-3">
    <a class="btn btn-danger" href="{{ route('historial_admin.index') }}">Cancelar</a>
    <button type="submit"  class="btn btn-primary">Guardar</button>
</div>

@error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

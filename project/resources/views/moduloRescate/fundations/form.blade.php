<div class="mb-3">
    <label for="Nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
        placeholder="Nombre" value="{{ old('name') }}">
</div>
<div class="mb-3">
    <label for="Telefono" class="form-label">Telefono</label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
        placeholder="Teléfono" value="{{ old('phone') }}">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
        placeholder="example@gmail.com" value="{{ old('email') }}">
</div>
<div class="mb-3">
    <label for="Descripcion" class="form-label">Descripcion</label>
    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
        placeholder="Descripción" value="{{ old('description') }}">
</div>
<div class="mb-3">
    <a class="btn btn-danger" href="{{ route('fundations.index') }}">Cancelar</a>
    <button type="submit"  class="btn btn-primary">Guardar</button>
</div>

@error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

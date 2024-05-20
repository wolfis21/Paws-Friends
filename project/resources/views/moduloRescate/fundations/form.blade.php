<div class="mb-3">
    <label for="Nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control " id="name" name="name"
        placeholder="Nombre" value="{{ old('name') }}" required >
</div>
<div class="mb-3">
    <label for="Telefono" class="form-label">Telefono</label>
    <input type="text" class="form-control" id="phone" name="phone"
        placeholder="Teléfono" value="{{ old('phone') }}" required>
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control " id="email" name="email"
        placeholder="example@gmail.com" value="{{ old('email') }}" required>
</div>
<div class="mb-3">
    <label for="Descripcion" class="form-label">Descripcion</label>
    <input type="text" class="form-control " id="description" name="description"
        placeholder="Descripción" value="{{ old('description') }}" required>
</div>
<div class="mb-3">
    <a class="btn btn-danger" href="{{ route('fundations.index') }}">Cancelar</a>
    <button type="submit"  class="btn btn-primary">Guardar</button>
</div>


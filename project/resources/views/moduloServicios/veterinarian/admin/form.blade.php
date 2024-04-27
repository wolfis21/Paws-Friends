<div class="mb-3">
    <label for="Nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
        placeholder="Jose Garcia" value="{{ old('name') }}">
</div>
<div class="mb-3">
    <label for="Direccion" class="form-label">Direccion</label>
    <input type="text" class="form-control @error('address') is-invalid @enderror " id="address" name="address"
        placeholder="Jose Garcia" value="{{ old('address') }}">
</div>
<div class="mb-3">
    <label for="Telefono" class="form-label">Telefono</label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
        placeholder="Jose Garcia" value="{{ old('phone') }}">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
        placeholder="example@tumama" value="{{ old('email') }}">
</div>
<div class="mb-3">
    <label for="link_ref" class="form-label">link_ref</label>
    <input type="text" class="form-control @error('link_ref') is-invalid @enderror" id="link_ref" name="link_ref"
        placeholder="Jose Garcia" value="{{ old('link_ref') }}">
</div>
<div class="mb-3">
    <label for="Img" class="form-label">Img_ref</label>
    <input type="file" class="form-control @error('img_ref') is-invalid @enderror" id="img_ref" name="img_ref"
        value="{{ old('img_ref') }}" accept="image/*">
</div>
<div class="mb-3">
    <label for="Especialidad" class="form-label">Especialidad</label>
    <select id="specialist_animals" name="specialist_animals" class="form-select">
        <option selected>Elegir Especialidad...</option>
        <option value="Medicina Interna">Medicina Interna</option>
        <option value="Urgencias">Urgencias</option>
        <option value="Cirugia">Cirugia</option>
        <option value="Dermatologia">Dermatologia</option>
        <option value="Fisioterapia">Fisioterapia</option>
        <option value="Oftalmologia">Oftalmologia</option>
        <option value="Oncologia">Oncologia</option>
        <option value="Radiología">Radiología</option>
        <option value="Nutricion">Nutricion</option>
        <option value="Otro">Otro</option>
    </select>
</div>
<div class="mb-3">
    <a class="btn btn-danger" href="{{ route('index') }}">Cancelar</a>
    <button class="btn btn-success">Guardar</button>
</div>

@error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

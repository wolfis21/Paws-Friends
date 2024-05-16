<input type="hidden" name="direct" value="1">

<input type="hidden" name="users_id" value="2"> {{-- luego implementar --}}

<div class="mb-3">
    <label for="date" class="form-label">Fecha de Entrega</label>
    <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
        placeholder="Jose Garcia" value="{{ old('date') }}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input type="description_ref" class="form-control @error('description_ref') is-invalid @enderror" id="description_ref" name="description_ref"
        placeholder="de lindo color..." value="{{ old('description_ref') }}">
</div>
<div class="mb-3">
    <label for="qty" class="form-label">Cantidad a donar (no requerido)</label>
    <input type="text" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty"
        placeholder="1234" value="{{ old('qty') }}">
</div>
<div class="mb-3">
    <label for="Img" class="form-label">Subir foto</label>
    <input type="file" class="form-control @error('photo_ref') is-invalid @enderror" id="photo_ref" name="photo_ref"
        value="{{ old('photo_ref') }}" accept="image/*">
</div>
<div class="mb-3"> {{-- integrar con las fundaciones ya registradas --}}
    <label for="" class="form-label">Tipo de Donaciones</label>
    <select id="" name="type_donation" class="form-select">
        <option selected>Seleccione</option>
        <option value="alimentos">Donaciones de alimentos y suministros</option>
        <option value="Medicina">Donaciones de medicamentos</option>
        <option value="Juguetes">Donaciones de juguetes</option>
        <option value="otro">Otros</option>
    </select>
</div>
<div class="mb-3"> {{-- integrar con las fundaciones ya registradas --}}
    <label for="" class="form-label">¿Para quién va dirigido?</label>
    <select id="" name="destino_fundacion" class="form-select">
        <option selected>Destino</option>
        <option value="fundacion 1">Medicina Interna</option>
        <option value="fundacion 1">Urgencias</option>
        <option value="fundacion 1">Cirugia</option>
        <option value="fundacion 1">Dermatologia</option>
        <option value="fundacion 1">Fisioterapia</option>
        <option value="fundacion 1">Oftalmologia</option>
        <option value="fundacion 1">Oncologia</option>
        <option value="fundacion 1">Radiología</option>
        <option value="fundacion 1">Nutricion</option>
        <option value="fundacion 1">Otro</option>
    </select>
</div>
<div class="mb-3">
    <a class="btn bg-red" href="{{ route('donaciones.index') }}">Cancelar</a>
    <button class="btn bg-cyan">Guardar</button>
</div>


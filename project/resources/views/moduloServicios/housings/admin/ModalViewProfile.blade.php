<div class="modal fade" id="viewProfile{{ $housing->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="color: #000">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informacion del Alojamiento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <img class="img-HD" src="{{ asset('storage/moduloServicios/images/housings/'. $housing->img_ref) }}" alt="imagen.housing" />
                </div>
                <div class="mb-3">
                    <label for="Direccion" class="form-label">Nombre: </label>
                    <p>{{ $housing->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="Direccion" class="form-label">Direccion: </label>
                    <p>{{ $housing->address }}</p>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Numero: </label>
                    <p>{{ $housing->phone }}</p>
                </div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Descripcion del lugar: </label>
                    <p>{{ $housing->description_location }}</p>
                </div>
                <div class="mb-3">
                    <label for="type_animal" class="form-label">Tipo de animal: </label>
                    <p>{{ $housing->type_animals }}</p>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Plan de alimentacion: </label>
                    <p>{{ $housing->food_offer }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a href="{{ route('editHousing', $housing->id) }}" class="btn bg-cyan">Editar</a>
            </div>
        </div>
    </div>
</div>

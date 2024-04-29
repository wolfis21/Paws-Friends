<div class="modal fade" id="viewProfile{{ $veterinarian->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="color: #000">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informacion del veterinario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <p>{{ $veterinarian->img_ref }}</p>
                </div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre: </label>
                    <p>{{ $veterinarian->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="Direccion" class="form-label">Direccion: </label>
                    <p>{{ $veterinarian->address }}</p>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Numero: </label>
                    <p>{{ $veterinarian->phone }}</p>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Corre: </label>
                    <p>{{ $veterinarian->email }}</p>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link: </label>
                    <p>{{ $veterinarian->link_ref }}</p>
                </div>
                <div class="mb-3">
                    <label for="especialidad" class="form-label">Especialidad: </label>
                    <p>{{ $veterinarian->specialist_animals }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a href="{{route('edit',$veterinarian->id)}}" class="btn bg-green">Editar</a>
            </div>
        </div>
    </div>
</div>

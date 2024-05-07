<div class="modal fade" id="viewProfile{{ $dogGroomer->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="color: #000">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informacion de la peluqueria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <img class="img-HD" src="{{ asset('storage/moduloServicios/images/dogGroomers/'. $dogGroomer->img_ref) }}" alt="imagen.dogGroomer" />
                </div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre: </label>
                    <p>{{ $dogGroomer->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="Direccion" class="form-label">Direccion: </label>
                    <p>{{ $dogGroomer->address }}</p>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Numero: </label>
                    <p>{{ $dogGroomer->phone }}</p>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link: </label>
                    <p>{{ $dogGroomer->link_ref }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a href="{{route('editDogGroomer',$dogGroomer->id)}}" class="btn bg-cyan">Editar</a>
            </div>
        </div>
    </div>
</div>

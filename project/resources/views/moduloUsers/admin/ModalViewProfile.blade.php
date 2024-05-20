<div class="modal fade" id="viewProfile{{ $admin->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="color: #000">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informacion del Administrador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <img class="img-vets" src="{{ asset('storage/moduloServicios/images/vets/'. $admin->img_ref) }}" alt="imagen.admin" />
                </div>
                
                
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre: </label>
                    <p>{{ $admin->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Apellido: </label>
                    <p>{{ $admin->last_name }}</p>
                </div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Cedula: </label>
                    <p>{{ $admin->dni }}</p>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Numero: </label>
                    <p>{{ $admin->phone }}</p>
                </div>
                <div class="mb-3">
                    <label for="Direccion" class="form-label">Direccion: </label>
                    <p>{{ $admin->address }}</p>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo: </label>
                    <p>{{ $admin->email }}</p>
                </div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Foto del dni: </label>
                    <p>{{ $admin->photo_dni }}</p>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Foto del rif: </label>
                    <p>{{ $admin->photo_rif }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a href="" class="btn bg-blue">Editar</a>
            </div>
        </div>
    </div>
</div>

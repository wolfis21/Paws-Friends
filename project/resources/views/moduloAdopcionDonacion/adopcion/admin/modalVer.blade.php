<div class="modal fade" id="viewProfile{{ $animals_adoptions->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="color: #000">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informacion de la adopcion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- <div class="mb-3">
                    <img class="img-HD" src="{{ asset('storage/moduloServicios/images/dogGroomers/'. $dogGroomer->photo_animal) }}" alt="imagen.dogGroomer" />
                </div> --}}
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre Mascota </label>
                    <p>{{ $animals_adoptions->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="Direccion" class="form-label">Direccion </label>
                    <p>{{ $animals_adoptions->species }}</p>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Raza </label>
                    <p>{{ $animals_adoptions->animal_race }}</p>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Sexo </label>
                    <p>{{ $animals_adoptions->sex_animal }}</p>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Edad </label>
                    <p>{{ $animals_adoptions->age_animal }}</p>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Descripcion </label>
                    <p>{{ $animals_adoptions->description_animals }}</p>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Direccion </label>
                    <p>{{ $animals_adoptions->location_address }}</p>
                </div>
                @if ($animals_adoptions->users_id !== null)
                    <div class="mb-3">
                        <label for="solicitante" class="form-label">Nombre del solicitante </label>
                        <p>{{ $animals_adoptions->users->name }} {{ $animals_adoptions->users->last_name }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="solicitante" class="form-label">Cedula </label>
                        <p><img style="width: 60%;" class="img-vets" src="{{ asset('storage/users/dniImg/'.$animals_adoptions->users->photo_dni ) }}" /></p>
                    </div>
                    <div class="mb-3">
                        <label for="solicitante" class="form-label">Rif </label>
                        <p><img style="width: 60%;" class="img-vets" src="{{ asset('storage/users/rifImg/'.$animals_adoptions->users->photo_rif ) }}" /></p>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado </label>
                    <p>{{ $animals_adoptions->status }}</p>
                </div>
            </div>
            <form action="{{ route('confirmarAdopcion', $animals_adoptions->id) }}" method="POST">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    {{ method_field('PUT') }}
                    @csrf
                    <button type="submit" class="btn bg-purple">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>

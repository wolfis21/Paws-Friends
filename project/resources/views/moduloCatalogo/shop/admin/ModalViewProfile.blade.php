<div class="modal fade" id="viewProfile{{ $shop->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="color: #000">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informacion de la tienda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <img class="img-HD" src="{{ asset('storage/moduloCatalogo/images/shops/'. $shop->img_ref) }}" alt="imagen.shop" />
                </div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre: </label>
                    <p>{{ $shop->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="Direccion" class="form-label">Direccion: </label>
                    <p>{{ $shop->address }}</p>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Numero: </label>
                    <p>{{ $shop->phone }}</p>
                </div>
                <div class="mb-3">
                    <label for="link_ref" class="form-label">Link de referencia: </label>
                    <p>{{ $shop->Link_ref }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a href="{{ route('editShop', $shop->id) }}" class="btn bg-cyan">Editar</a>
            </div>
        </div>
    </div>
</div>
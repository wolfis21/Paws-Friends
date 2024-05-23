<div class="modal fade" id="viewProfile{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="color: #000">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informacion del producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <img class="img-HD" src="{{ asset('storage/moduloCatalogo/images/products/'. $product->img_ref) }}" alt="imagen.product" />
                </div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre: </label>
                    <p>{{ $product->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="Descripcion" class="form-label">Descripcion: </label>
                    <p>{{ $product->description }}</p>
                </div>
                <div class="mb-3">
                    <label for="Categoria" class="form-label">Categoria: </label>
                    <p>{{ $product->category_animal->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="Precio" class="form-label">Precio: </label>
                    <p>{{ $product->price }}</p>
                </div>
                <div class="mb-3">
                    <label for="Tienda" class="form-label">Tienda: </label>
                    <p>{{ $product->shop->name }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a href="{{ route('editProduct', $product->id) }}" class="btn bg-green">Editar</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteProfile{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="color: #000">
            <div class="modal-header">
                <h5 class="modal-title">Deseas eliminar este producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Deseas eliminar a {{ $product->name }}</p>
            </div>
            <form action="{{ route('destroyProduct', $product->id) }}" method="POST">
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                @method('DELETE')
                @csrf
                <button type="submit" class="btn bg-red">Eliminar</button>
              </div>
          </form>
        </div>
    </div>
</div>
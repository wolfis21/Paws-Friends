<div class="modal fade" id="deleteProfile{{$animals_adoptions->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="color: #000">
            <div class="modal-header">
                <h5 class="modal-title">Deseas rechazar a esta adopcoin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Deseas denegar esta adopcion ?</p>
            </div>
            <form action="{{ route('denegarAdopcion', $animals_adoptions->id) }}" method="POST">
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                {{ method_field('PUT') }}
                @csrf
                <button type="submit" class="btn bg-red">Rechazar</button>
              </div>
          </form>
        </div>
    </div>
</div>

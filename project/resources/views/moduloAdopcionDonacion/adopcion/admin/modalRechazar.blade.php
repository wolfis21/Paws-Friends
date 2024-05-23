<div class="modal fade" id="deleteProfile{{$animals_adoptions->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="color: #000">
            <div class="modal-body">
                <p>Deseas rechazar esta adopcion ?</p>
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

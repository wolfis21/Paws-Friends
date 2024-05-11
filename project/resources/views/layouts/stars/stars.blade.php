<!-- CDN Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<!-- CDN Botstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Mis Estilos CSS -->
@vite('resources/views/layouts/stars/star.css')
<form method="POST" action="{{ route('updateVeterinarianPuntuations', $veterinarian->id) }}"
    enctype="multipart/form-data">

    {{ method_field('PUT') }}
    @csrf
    <div class="" style="width: 18rem;">
        <div class="card-body">
            <div class="rating">
                <button id="puntuation" name="puntuation" value="1" class="btnE"><i
                        class="bi bi-star-fill star"></i></button>
                <button id="puntuation" name="puntuation" value="2" class="btnE"><i
                        class="bi bi-star-fill star"></i></button>
                <button id="puntuation" name="puntuation" value="3" class="btnE"><i
                        class="bi bi-star-fill star"></i></button>
                <button id="puntuation" name="puntuation" value="4" class="btnE"><i
                        class="bi bi-star-fill star"></i></button>
                <button id="puntuation" name="puntuation" value="5" class="btnE"><i
                        class="bi bi-star-fill star"></i></button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/moduloServicios/star.js') }}"></script>
</form>



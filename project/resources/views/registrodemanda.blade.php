<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('includes.head')
</head>
<body class="b">

    <header>
        @include('includes.header')
    </header>

    <main class="m">

        <!-- Contenido de la página principal del modulo 2. Lo que ve el Usuario al presionar el boton del menu: servicios -->

        <div class="container-fluid ">

        <!--BOTON VOLVER A PAGINA PRINCIPAL-->

        <a class="btn btn-success" href="{{route('servicios')}}">VOLVER</a>

        <h1>Registrar Demanda</h1>

        <div class="container mt-6">
        <form action="{{ route('guardar_denuncia') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="descripcion">Descripción de la situación</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="motivo">Motivo de denuncia</label>
                <select class="form-control" id="motivo" name="motivo" required>
                    <option value="maltrato">Maltrato animal</option>
                    <option value="abandono">Abandono</option>
                </select>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto de referencia</label>
                <input type="file" class="form-control-file" id="foto" name="foto" accept="image/*">
            </div>
            <div class="form-group">
                <label for="usuario">Usuario (opcional)</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <button type="submit" class="btn btn-primary">Enviar Denuncia</button>
        </form>

        <!--FIN DE CONTAINER FLUID-->
        </div>

    </main>
    


    <footer>
        @include('includes.footer')
    </footer>
    

</body>
</html>
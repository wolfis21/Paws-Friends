@extends('layouts.headerNav')
@section('content')

    <div class="ba-">

        <!-- Contenido de la página principal del modulo 2. Lo que ve el Usuario al presionar el boton del menu: servicios -->
          <!--BOTON VOLVER A PAGINA PRINCIPAL-->

            <a class="vv" href="{{route('servicios')}}">VOLVER</a>

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <h2 id="heading">Registro denuncia</h2>
                            <p>Todos los campos por llenar son obligatorios</p>
                            <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li id="personal"><strong>Denuncia</strong></li>
                                    <li id="payment"><strong>Imagenes</strong></li>
                                    <li id="confirm"><strong>Final</strong></li>
                                </ul>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> <br> <!-- fieldsets -->
    
                           
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Denuncia:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Paso 1 - 3</h2>
                                            </div>
                                        </div> 
                                        <label class="fieldlabels">Descripciópn situación: *</label> 
                                        <input type="text" name="description" placeholder="Redacta tu denuncia a presentar" /> 
                                        <label class="fieldlabels">Dirección: *</label> 
                                        <input type="text" name="lugar" placeholder="Lugar del suceso" /> 
                                        <label class="fieldlabels">Motivo denuncia: *</label> 
                                        <select class="form-control" id="motivo" name="motivo" required>
                                                    <option value="maltrato">Maltrato animal</option>
                                                    <option value="abandono">Abandono</option>
                                                    <option value="abandono">Situación de calle</option>
                                                </select>
                                        <label class="fieldlabels">Urgencia denuncia: *</label>
                                        <select class="form-control" id="urgencia" name="urgencia" required>
                                                        <option value="Alta">Alta</option>
                                                        <option value="Media">Media</option>
                                                        <option value="Baja">Baja</option>
                                                    </select>
                                         
                                    </div> 
                                    <input type="button" name="next" class="next action-button" value="Siguiente" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Subir imagenes requeridas:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Paso 2 - 3</h2>
                                            </div>
                                        </div>
                                          <label class="fieldlabels">Imagen del animal encontrado:</label> 
                                          <input type="file" name="animal" accept="image/*">

                                    </div>
                                     <input type="button" name="next" class="next action-button" value="Enviar" />
                                      <input type="button" name="previous" class="previous action-button-previous" value="Regresar" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Denuncia registrada:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps"> Paso 3 - 3</h2>
                                            </div>
                                        </div> <br><br>
                                        <h2 class="purple-text text-center"><strong>EXITOSAMENTE !</strong></h2> <br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="./imagenes/img.png" class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5 class="purple-text text-center">Su denuncia ha sido enviada, recibirá respuesta a la brevedad posible</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
@endsection
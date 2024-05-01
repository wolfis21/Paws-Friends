@extends('layouts.headerNav')
@section('content')

    <div class="ba">

        <!-- Contenido de la página principal del modulo 2. Lo que ve el Usuario al presionar el boton del menu: servicios -->

        <div class="container-fluid ">

                <!--BOTON VOLVER A PAGINA PRINCIPAL-->

                <a class="btn btn-success vv" href="{{route('servicios')}}">VOLVER</a>


                <div class="row demanda">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2 id="heading">Registrar demanda</h2>
                        <p class="tx-registro">Todos los campos son obligatorios</p>

                        <form action="{{ route('guardar_denuncia') }}" id="msform"  method="POST" enctype="multipart/form-data">
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Cuenta</strong></li>
                                <li  id="denuncia"><strong>Denuncia</strong></li>
                                <li  id="image"><strong>Imagenes</strong></li>
                                <li  id="confirm"><strong>Registro</strong></li>
                            </ul>
                            <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Información de cuenta:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div>
                                <!--EMAIL-->
                                <label class="fieldlabels">Email: *</label>
                                 <!-- INGRESAR EMAIL-->
                                 <input type="email" name="email" placeholder="Email" /> 
                                  <!--USUARIO-->
                                <label class="fieldlabels">Usuario: *</label> 
                                 <!--INGRESAR USUARIO-->
                                <input type="text" name="uname" placeholder="Usuario" />
                                 <!--CONTRASEÑA-->
                                <label class="fieldlabels">Contraseña: *</label> 
                                 <!--INGRESAR CONTRASEÑA-->
                                <input type="password" name="pwd" placeholder="Password" /> 
                                 <!--CONFIRMAR CONTRASEÑA-->
                                <label class="fieldlabels">Confirmación de contraseña: *</label> 
                                 <!--INGRESAR CONTRASEÑA NUEVAMENTE-->
                                <input type="password" name="cpwd" placeholder="Confirm Password" />
                            </div> 
                            <!--BOTON-->
                            <input type="button" name="next" class="next action-button" value="Siguiente" />
                    </fieldset>
                            <!--SEGUNDA PARTE DEL FORMULARIO-->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Información personal:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 2 - 4</h2>
                                        </div>
                                    </div> 
                                    <!--NOMBRE-->
                                    <label class="fieldlabels">Nombre: *</label> 
                                    <!--INGRESAR NOMBRE-->
                                    <input type="text" name="fname" placeholder="Nombre" />
                                    <!--APELLIDO-->
                                    <label class="fieldlabels">Apellido: *</label> 
                                    <!--INGRESAR APELLIDO-->
                                    <input type="text" name="lname" placeholder="Apellido" /> 
                                    <!--CÉDULA-->
                                    <label class="fieldlabels">Imagen cédula: *</label>
                                    <!--INGRESAR CÉDULA-->
                                    <input type="file" class="form-control-file" id="foto1" name="foto1" accept="image/*">
                                     <!--RIF-->
                                    <label class="fieldlabels">Imagen RIF: *</label>
                                    <!--INGRESAR RIF-->
                                    <input type="file" class="form-control-file" id="foto2" name="foto2" accept="image/*">

                                    <!--BOTON SIGUIENTE-->
                                    </div> <input type="button" name="next" class="next action-button" value="Siguiente" /> 
                                    <!--BOTON REGRESAR-->
                                    <input type="button" name="previous" class="previous action-button-previous" value="Regresar" />
                                </fieldset>
                                <!--TERCERA PARTE DEL FORMULARIO-->
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Subir imagen denuncia:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Step 3 - 4</h2>
                                                </div>
                                            </div> 
                                            <label class="fieldlabels">Subir imagen denuncia:</label>
                                            <input type="file" class="form-control-file" id="foto3" name="foto3" accept="image/*">

                                             <label class="fieldlabels" for="descripcion">Descripción de la situación</label>
                                             <input type="text" name="description" placeholder="Escribir denuncia" /> 

                                             <label class="fieldlabels" for="motivo">Motivo de denuncia</label>
                                                <select class="form-control" id="motivo" name="motivo" required>
                                                    <option value="maltrato">Maltrato animal</option>
                                                    <option value="abandono">Abandono</option>
                                                    <option value="abandono">Situación de calle</option>
                                                </select>

                                                <label class="fieldlabels" for="motivo">Urgencia de denuncia</label>
                                                    <select class="form-control" id="urgencia" name="urgencia" required>
                                                        <option value="Alta">Alta</option>
                                                        <option value="Media">Media</option>
                                                        <option value="Baja">Baja</option>
                                                    </select>

                                                    <label for="direccion">Dirección</label>
                                                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                                                    <!--BOTON ENVIAR-->
                                                    <input type="button" name="next" class="next action-button" value="Enviar" /> 
                                                     <!--BOTON REGRESAR-->
                                                    <input type="button" name="previous" class="previous action-button-previous" value="Regresar" />
                                        </div>
                                 </fieldset>
                                        <!--CUARTA PARTE DEL FORMULARIO-->  
                                        <fieldset>
                                                <div class="form-card">
                                                    <div class="row">
                                                            <div class="col-7">
                                                                <h2 class="fs-title">Finalizar:</h2>
                                                            </div>
                                                            <div class="col-5">
                                                                <h2 class="steps">Step 4 - 4</h2>
                                                            </div>
                                                    </div>
                                                        <h2 class="purple-text text-center"><strong>Denuncia registrada !</strong></h2> <br>
                                                        <div class="row justify-content-center">
                                                            <div class="col-3">
                                                                <img src="{{URL::asset ('../imagenes/img.png')}}" class="fit-image">
                                                             </div>
                                                        </div> 
                                                        <div class="row justify-content-center">
                                                            <div class="col-7 text-center">
                                                                <h5 class="purple-text text-center">Tu denuncia ha sido enviada</h5>
                                                            </div>
                                                        </div>
                                                </div>
                                        </fieldset>
                        </form>
                    </div>
                </div>

                    
         <!--FIN DE CONTAINER FLUID-->
        </div>

</div>
@endsection
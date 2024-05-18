<div class="ba-">

    <!-- Contenido de la página principal del modulo 2. Lo que ve el Usuario al presionar el boton del menu: servicios -->
      <!--BOTON VOLVER A PAGINA PRINCIPAL-->
        <div class="boo">
        <a class="vv" href="{{route('servicios')}}">VOLVER</a>
        </div>
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

                       <form method="POST" action="{{ route('registrodemanda.store') }}" enctype="multipart/form-data">
                           @csrf
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Denuncia:</h2>
                                        </div>
                                    </div>
                                    
                                     {{-- DEBE GUARDAR EL USUARIO QUE YA INICIÓ SESIÓN PERO PARA PROBAR SE HIZO ESTO: Al registrar se coloca por defecto el usuario id=1 --}}
                                     <input type="hidden" class="form-control" id="users_id" name="users_id" value="1">
                                  
                                    <label class="fieldlabels">Descripciópn situación: *</label> 
                                    <input type="text" class="form-control @error('description_case') is-invalid @enderror" id="description_case" name="description_case"
                                     placeholder="Redacta tu denuncia a presentar" value="{{ old('description_case') }}" required> 

                                    <label class="fieldlabels">Dirección: *</label> 
                                    <input type="text" class="form-control @error('adress_animals') is-invalid @enderror" id="adress_animals" name="adress_animals"
                                    placeholder="Lugar del suceso" value="{{ old('adress_animals') }}" required>

                                    <label for="imagen"  class="fieldlabels">Imagen del animal encontrado:</label> 
                                    <input type="file" id="photo_ref" name="photo_ref" required>

                                    <label class="fieldlabels">Motivo denuncia: *</label> 
                                    <select name="motivo_id" class="form-control" required>
                                        <option value="">Selecciona un motivo</option>
                                        @foreach ($motivos as $motivo)
                                            <option value="{{ $motivo->id }}">{{ $motivo->name }}</option>
                                        @endforeach
                                    </select>
                                            
                                    <label class="fieldlabels">Urgencia denuncia: *</label>
                                    <select name="urgencia_id" class="form-control" required>
                                        <option value="">Selecciona una urgencia</option>
                                        @foreach ($urgencias as $urgencia)
                                            <option value="{{ $urgencia->id }}">{{ $urgencia->name }}</option>
                                        @endforeach
                                    </select>
                                     
                                </div> 

                                   
                                    {{-- Al registrar se coloca por defecto "en espera" id=1 --}}
                                    <input type="hidden" class="form-control" id="types_status_id" name="types_status_id" value="1">

                                    {{-- Al registrar se coloca por defecto "no asignada" id=2 --}}
                                    <input type="hidden" class="form-control" id="statusfund_id" name="statusfund_id" value="2">

                                    
                                  <button type="submit"  class="btn btn-primary">Enviar</button>
                                  <input type="button" name="previous" class="previous action-button-previous" value="Regresar" />
                                
                            </fieldset>
                      



                          
                        </form>
                  </form>
               </div>
            </div>
        </div>
   </div>
    
</div>
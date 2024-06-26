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
                  <div id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li id="personal"><strong>Denuncia</strong></li>
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
                                    
                                    
                                     <input type="hidden" class="form-control" id="users_id" name="users_id" value="{{Auth::user()->id}}"/>
                                  
                                     <label class="fieldlabels">Descripción situación:</label> 
                                     @error('description_case')
                                     <small class="text-danger">{{ $message }}</small>
                                 @enderror  
                                    <input type="text" class="form-control @error('description_case') is-invalid @enderror" id="description_case" name="description_case" placeholder="Redacta tu denuncia a presentar" value="{{ old('description_case') }}"  /> 

                                    <label class="fieldlabels">Dirección:</label> 
                                    @error('adress_animals')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror  
                                    <input type="text" class="form-control @error('adress_animals') is-invalid @enderror" id="adress_animals" name="adress_animals" placeholder="Lugar del suceso" value="{{ old('adress_animals') }}" />

                                    <label for="imagen"  class="fieldlabels">Imagen del animal encontrado:</label> 
                                    @error('photo_ref')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror  
                                     <input type="file" class="form-control @error('adress_animals') is-invalid @enderror" id="photo_ref" name="photo_ref" accept="image/*" />

                                     <label class="fieldlabels">Motivo denuncia:</label> 
                                     @error('motivo_id')
                                     <small class="text-danger">{{ $message }}</small>
                                 @enderror  
                                    <select name="motivo_id" id="motivo" class="form-control @error('motivo_id') is-invalid @enderror" >
                                        <option value="">Selecciona un motivo</option>
                                        @foreach ($motivos as $motivo)
                                            <option value="{{ $motivo->id }}">{{ $motivo->name }}</option>
                                        @endforeach
                                    </select>
                                            
                                    <label class="fieldlabels">Urgencia denuncia:</label>
                                    @error('urgencia_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror  
                                    <select name="urgencia_id" id="urgencia" class="form-control  @error('motivo_id') is-invalid @enderror" >
                                        <option value="">Selecciona una urgencia</option>
                                        @foreach ($urgencias as $urgencia)
                                            <option value="{{ $urgencia->id }}">{{ $urgencia->name }}</option>
                                        @endforeach
                                    </select>
                                </div> 
                               <!--BOTON ENVIAR-->
                               <button type="submit"  class="next action-button">Enviar</button>
                            </fieldset>
                              
                                         <fieldset>
                                                <div class="form-card">
                                                    <div class="row">
                                                            <div class="col-7">
                                                                <h2 class="fs-title">Finalizar:</h2>
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
                            
                                   
                                    {{-- Al registrar se coloca por defecto "en espera" id=1 --}}
                                    <input type="hidden" class="form-control" id="types_status_id" name="types_status_id" value="1"/>

                                    {{-- Al registrar se coloca por defecto "no asignada" id=2 --}}
                                    <input type="hidden" class="form-control" id="statusfund_id" name="statusfund_id" value="2"/>  
                       </form>
                    </div>
               </div>
            </div>
        </div>
   </div>
    
</div>
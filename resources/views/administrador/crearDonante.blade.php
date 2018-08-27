@extends('administrador.menuAdmin')
@section('content')
<div class="ks-column ks-page" >
   <div class="ks-page-header">
      <section class="ks-title">
         <h3>CREAR DONANTES</h3>
      </section>
   </div>
   <div class="ks-page-content-body" style="margin-top:70px">
      <div class="ks-nav-body-wrapper">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-8 ks-panels-column-section">
                  <div class="card">
                     <div class="card-block">
                        <form>
                           <div class="row">
                              <div class="col-lg-6 form-group">
                                 <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Nombre">
                                 <small class="form-text text-muted">Ingresa el nombre del donante</small>
                              </div>
                              <div class="col-lg-6 form-group">
                                 <input type="text" class="form-control" name="apellido" aria-describedby="emailHelp" placeholder="Apellido">
                                 <small class="form-text text-muted">Ingresa el apellido del donante</small>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-9 form-group">
                                 <input type="text" class="form-control" name="correo" aria-describedby="emailHelp" placeholder="Correo" data-validation="email">
                                 <small class="form-text text-muted">Ingresa el correo del donante</small>
                              </div>
                              <div class="col-sm-3 input-group">
                                 <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary ks-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Género
                                    </button>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" >Femenino</a>
                                       <a class="dropdown-item" >Masculino</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="form-group">
                                    <input type="text" maxlength="8" minlength="8" id="ks-maxlength-area" class="form-control" name="dni" aria-describedby="emailHelp" placeholder="DNI">
                                    <small class="form-text text-muted">Ingresa el DNI del donante</small>
                                    <small class="form-text text-muted"><span id="ks-maxlength-label">8</span> caracteres</small>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="form-group">
                                    <input type="text" maxlength="9" minlength="9" id="ks-maxlength-area" class="form-control" name="celular" aria-describedby="emailHelp" placeholder="Celular">
                                    <small class="form-text text-muted">Ingresa el celular del donante</small>
                                    <small class="form-text text-muted"><span id="ks-maxlength-label">9</span> caracteres</small>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="form-group">
                                    <input type="text" id="ks-placeholder-mask-input" class="form-control ks-placeholder-mask-input">
                                    <small class="form-text text-muted">Ingresa la fecha de nacimiento del donante</small>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <small class="form-text text-muted">Tipo de sangre</small>
                              </div>
                              <div class="col-6 col-sm-4 input-group">
                                 <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary ks-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Tipo
                                    </button>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item">A</a>
                                       <a class="dropdown-item">B</a>
                                       <a class="dropdown-item">AB</a>
                                       <a class="dropdown-item">O</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-6 col-sm-4 input-group">
                                 <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary ks-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Factor
                                    </button>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item">+</a>
                                       <a class="dropdown-item">-</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-sm-4 input-group">
                                 <div class="custom-control custom-checkbox ks-checkbox">
                                    <input id="c1" type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label" for="c1">Desconoce su tipo de sangre</label>
                                </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <small class="form-text text-muted">Ubicación del donante</small>
                              </div>
                              <div class="col-sm-4 input-group">
                                 <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary ks-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Departamento
                                    </button>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item">Piura</a>
                                       <a class="dropdown-item">Lima</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4 input-group">
                                 <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary ks-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Provincia
                                    </button>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item">Sullana</a>
                                       <a class="dropdown-item">Talara</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4 input-group">
                                 <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary ks-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Distrito
                                    </button>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item">Castilla</a>
                                       <a class="dropdown-item">Piura</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row justify-content-center align-items-center">
                              <div class="col-sm-2 col-4">
                                 <div class="ks-avatar ks-online">
                                    <img src="/img/donantes/donante1.jpg" width="100" height="100">
                                 </div>
                              </div>
                              <div class="col-sm-4 col-8">
                                 <button class="btn btn-primary ks-btn-file">
                                    <span class="la la-cloud-upload ks-icon"></span>
                                    <span class="ks-text">Selecciona una foto</span>
                                    <input type="file"
                                       data-validation="mime size required"
                                       data-validation-allowing="jpg, png"
                                       data-validation-max-size="3000kb"
                                       data-validation-error-msg-required="No image selected">
                                 </button>
                              </div>
                              <div class="col-8 col-sm-4 input-group">
                                 <div class="custom-control custom-checkbox ks-checkbox">
                                    <span class="ks-text">¿El donante desea recibir notificaciones SMS?</span>
                                 </div>
                              </div>
                              <div class="col-4 col-sm-1 input-group">
                                 <div class="custom-control custom-checkbox ks-checkbox">
                                    <label class="ks-checkbox-slider ks-on-off ks-primary">
                                       <input type="checkbox" value="1">
                                       <span class="ks-indicator"></span>
                                       <span class="ks-on">Sí</span>
                                       <span class="ks-off">No</span>
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="row justify-content-center align-items-center">
                              <button class="btn btn-primary" type="submit">
                                 <span class="ks-text">Registrar donante</span>   
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@stop
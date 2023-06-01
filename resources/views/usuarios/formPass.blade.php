<link rel="stylesheet" href="{{ asset('css/changePass.css') }}">
<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-10 col-lg-10 col-xl-8 offset-xl-1">
            <div class="form-group">
                <span class="toggle-password fa fa-eye" onclick="Viewpassword()"></span>

                <form action="settings/update" method="post">
                    @csrf
                
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Contraseña actual</label>
                    <input name="password" id="password" type="password" class="form-control form-control-lg" placeholder="contraseña" />
                    
                    <label class="form-label" for="form3Example3">Nueva contraseña</label>
                    <input name="password-new" id="password-new" type="password" class="form-control form-control-lg" placeholder="nueva contraseña" />

                    <label class="form-label" for="form3Example3">Repita su nueva contraseña</label>
                    <input name="password-repeat" id="password-repeat" type="password" class="form-control form-control-lg" placeholder="repita la contraseña" />
                    
                </div>
                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                    Cambiar
                </button>
                <a href=" {{ url()->previous() }} ">
                    <button class="btn btn-danger btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" type="button">
                      Cancelar
                    </button>
                </a>        
              </form>
            </div>
          </div>
        </div>
      </div>

<script src="{{asset('js/viewPass.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/perfil.css')}}">
<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1">
            <label class="form-label" for="form3Example3">Nombre completo</label>
            <p>
                {{ $user->nombre." ".$user->apellido }}    
            </p> 

            <label class="form-label" for="form3Example3">CI</label>
            <p>
                {{ $user->ci }}    
            </p>    
            
            <label class="form-label" for="form3Example3">Usuario</label>
            <p>
                {{ $user->user }}    
            </p>    
            
            <label class="form-label" for="form3Example3">Direccion</label>
            <p>
                {{ $user->direccion }}    
            </p>    

            <label class="form-label" for="form3Example3">Celular</label>
            <p>
                {{ $user->celular }}    
            </p>    
            
            
            <button type="" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
            Modificar
            </button>
            <a href=" {{ url()->previous() }} ">
            <button class="btn btn-danger btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" type="button">
            Cancelar
            </button>
            </a>        
        </div>
        <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1">
            <label class="" for="form3Example3">Perfil</label>
            <img src="{{ asset('img/fondoL.jpg') }}" alt="Perfil" class="perfil">

            <label class="form-label" for="form3Example3">Cargo</label>
            <p>
                {{ $user->cargo }}
            </p>

            <label class="form-label" for="form3Example3">Fecha de Nacimiento</label>
            <p>
                {{ $user->fNacimiento }}
            </p>
            
        </div>
    </div>
</div>
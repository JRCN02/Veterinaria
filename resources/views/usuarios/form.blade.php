<link rel="stylesheet" href="{{asset('css/perfil.css')}}">
<div class="container-fluid h-custom">
    <form action="update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1">
                <label class="form-label" for="form3Example3">Nombre: </label>
                <p> {{ $user->nombre." ".$user->apellido }} </p>

                <label class="form-label" for="form3Example3">CI</label>
                <p> {{ $user->ci }} </p>    
                
                <label class="form-label" for="form3Example3">Usuario</label>
                <input name="user" type="text" class="form-control form-control-lg" value="{{ $user->user }}"/>

                <label class="form-label" for="form3Example3">Direccion</label>
                <input name="direccion" type="text" class="form-control form-control-lg" value="{{ $user->direccion }}"/>

                <label class="form-label" for="form3Example3">Celular</label>
                <input name="celular" type="text" class="form-control form-control-lg" value="{{ $user->celular }}"/>
            
                
                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                    Guardar
                </button>
                
                <a href=" {{ url()->previous() }} ">
                    <button class="btn btn-danger btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" type="button">
                        Cancelar
                    </button>
                </a>                
            </div>
        
            <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1">
                <label class="" for="form3Example3">Perfil</label>
                <img src="{{ asset( $user->perfil) }}" alt="Perfil" class="perfil">
                <input type="file" name="perfil" id="">
                <label class="form-label" for="form3Example3">Fecha de Nacimiento</label>
                <p>
                    {{ $user->fNacimiento }}
                </p>
                
            </div>
        </div>
    </form>
</div>
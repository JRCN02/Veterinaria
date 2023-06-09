<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-10 col-lg-10 col-xl-8 offset-xl-1">
            <div class="form-group">
                <form action="insert" method="post">
                    @csrf

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Nombre</label>
                    <input name="nombre" type="text" class="form-control form-control-lg" placeholder="Nombre" />
                    
                    <label class="form-label" for="form3Example3">Apellido</label>
                    <input name="apellido" type="text" class="form-control form-control-lg" placeholder="Apellido" />

                    <label class="form-label" for="form3Example3">Rol</label>
                    <select name="rol" class="form-control">
                      @foreach ($rol as $r)
                        <option value=" {{ $r->name }} ">{{ $r->name }}</option>    
                      @endforeach
                      
                    </select>

                    <label class="form-label" for="form3Example3">Especialidad</label>
                    <select name="especialidad" class="form-control">
                      @foreach ($esp as $e)
                        <option value="{{ $e->nombre }}"> {{ $e->nombre }} </option>  
                      @endforeach
                    </select>

                    <label class="form-label" for="form3Example3">Cedula</label>
                    <input name="ci" type="number" class="form-control form-control-lg" placeholder="cedula" />
                    
                    <label class="form-label" for="form3Example3">Fecha de Nacimiento</label>
                    <input name="fNacimiento" type="date" class="form-control form-control-lg"  />
                    
                    
                    <label class="form-label" for="form3Example3">Direccion</label>
                    <input name="direccion" type="text" class="form-control form-control-lg" placeholder="Direccion" />
                    
                    
                    <label class="form-label" for="form3Example3">Celular</label>
                    <input name="celular" type="number" class="form-control form-control-lg" placeholder="Celular" />

                    <label class="form-label" for="form3Example3">Email</label>
                    <input name="email" type="mail" class="form-control form-control-lg" placeholder="Email" />
                    
                    <label class="form-label" for="form3Example3">Usuario</label>
                    <input name="user" type="text" class="form-control form-control-lg" placeholder="usuario" />
                    
                    <label class="form-label" for="form3Example3">Contraseña</label>
                    <input name="password" type="password" class="form-control form-control-lg" placeholder="Contraseña" />
                    
                </div>
                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                    Agregar
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
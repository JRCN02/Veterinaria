@extends('layouts.app')
@section('title','Reservar')

@section('content')

    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-10 col-lg-10 col-xl-8 offset-xl-1">
          <div class="form-group">
              <h2 class="lead fw-normal mb-0 me-3 ">Agenda una cita con nosotros </h2>
            <form method="post">
              @csrf
              
              <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Ingrese su nombre</label>
                  <input name="nombreP" type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Nombre(s)" />
                  
                  <label class="form-label" for="form3Example3">Ingrese su Apellido</label>
                  <input name="apellidoP" type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Apellido(s)" />
                  
                  <label class="form-label" for="form3Example3">Ingrese el nombre de su mascota</label>
                  <input name="nombreM" type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Nombre de la mascota" />
                  
                  <label class="form-label" for="form3Example3">Ingrese la raza de su mascota</label>
                  <input name="raza" type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Raza" />
                  
                  <label class="form-label" for="form3Example3">Ingrese la edad su mascota</label>
                  <input name="edad" type="number" id="form3Example3" class="form-control form-control-lg" placeholder="Edad" />
                  
                  <label class="form-label" for="form3Example3">Ingrese la descripcion de su consulta</label>
                  <input name="descripcion" type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Descripcion del malestar o consulta" />
  
                  <label class="form-label" for="form3Example3">Fecha de consulta</label>
                  <input name="fecha" type="date" id="form3Example3" class="form-control form-control-lg"/>
                  
                  <label class="form-label" for="form3Example3">Hora de la consulta <br>Nota: Hora de consulta ejemplo 4:00 o 4:30</label>
                  <input name="hora" type="time" id="form3Example3" class="form-control form-control-lg"/>
                  
                   <select name="doctores" id="">
                      @if (!$doc->isEmpty()){
                        @foreach ($doc as $d)
                            <option value="{{$d->id}}">{{$d->nombre}}</option>
                        @endforeach
                      }
                          
                      @endif  
                  </select>
              </div>
              <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                  Reservar
              </button>
                  
            </form>
          </div>
          <a href="/">
            <button class="btn btn-danger btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
              Volver
          </button>
         
          </a>
        </div>
      </div>
    </div>



 
    
  </section>
@endsection
@extends('layouts.app')

@section('title','login')
@section('style')
  <link rel="stylesheet" href=" {{ asset('css/login.css') }} ">
@endsection
@section('content')
    <div class="container-fluid">
      <div class="row">
          <div class="col d-flex justify-content-center align-items-center " style="height: 100vh;">
            <form class="login" action="login" method="post">
              @csrf
              <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal mb-0 me-3">Iniciar Secion </p>
              </div>
              <!-- Email input -->
              <div class="form-outline mb-4 mt-3">
                <input name="user" type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Ingrese su usuario" />
                <label class="form-label" for="form3Example3">Usuario</label>
              </div>
              <!-- Password input -->
              <div class="form-outline mb-3 mt-3">
                <input name="password" type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Ingrese su contraseña" />
                <label class="form-label" for="form3Example4">Contraseña</label>
              </div>
              <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                  Ingresar
              </button>     
              <br>
              <!--a href="">
                <button class="btn btn-danger mt-3">Cancelar</button>
  
              </a-->
            </form>
          </div>
        
      </div>
    </div>

@endsection
@extends('layouts.app')

@section('title','home')

@section('style')
  <link href="{{asset('css/home.css')}}" rel="stylesheet">
@endsection

@section('content')

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Veterinaria</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Servicios</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
      </ul>
      
    </div>
    <a class="nav-link float-right mr-3" href="login">Iniciar sesión</a>
  </nav>

  <div class="container-fluid mt-2 menuInicio">
    <h1>Bienvenidos a nuestra Veterinaria</h1>
      <p>Ofrecemos servicios de alta calidad para el cuidado de tu mascota</p>
        <div class="col d-flex justify-content-center align-items-end ">
          <form class="form-inline" action="form" method="post">
            @csrf
            <div class="row">
                <label for="exampleSelect">Selecciona un servicio:</label>
                <select class="form-control" name="servicio">
                  @foreach ($service as $s)
                    <option value="{{$s->id}}"> {{$s->nombre}} </option>  
                  @endforeach  
                </select>    
                <button type="submit" class="btn btn-primary mt-3 ">Agenda una cita</button>
            </div>
          </form>
        </div>
      
  </div>


  <!--Servicios-->
  <div class="container mt-3" >
    <h2 id="services">Servicios</h2>
    <div class="row">
      @foreach ($service as $item)
          
        <div class="col-md-4">
          <div class="card md-4 shadow-sm">
            <img src="{{asset('img/home.jpg')}}" alt="service" class="card-img-top">
          </div>
          
          <div class="card-body">
            <h4 class="card-title">
              {{$item->nombre}}
            </h4>
          <p class="card-text">
              {{$item->descripcion}}
          </p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            </div>
            <div class="text-right">
              <small class="text-muted float-right"> {{$item->costo}} </small>
            </div>
          </div>
        </div>
      </div>

      @endforeach

    </div>
  </div>



  
  <br>
  <br>
  <footer class="footer bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-primary">
          Contenido del footer copyRigth
        </div>
      </div>
    </div>
  </footer>
  <br>
@endsection
<div class="container mt-3" >
    <div class="row justify-content-end">
        <a class="ml-2" href="servicios/formAdd">
            <button class="btn btn-success">Agregar</button>
        </a>

    </div>
    <div class="row">
    @foreach ($servi as $item)
        
        <div class="col-md-4">
            <div class="card md-4 shadow-sm">
                <img src="{{asset('img/home.jpg')}}" alt="service" class="card-img-top">
            </div>
        
            <div class="card-body">
                <h4 class="card-title"> {{$item->nombre}} </h4>
                <p class="card-text"> {{$item->descripcion}} </p>
                
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                    <div class="text-right">
                        <small class="text-muted float-right"> {{$item->costo}} </small>
                    </div>
                </div>
            
                <a class="ml-2" href="servicios/delete?id={{ $item->id }}">
                    <button class="btn btn-danger">Eliminar</button>
                </a>
                <a class="ml-2" href="servicios/formUpdate?id={{ $item->id }}">
                    <button class="btn btn-warning">Actualizar</button>
                </a>
            </div>
            
        </div>
    @endforeach
    </div>
</div>    
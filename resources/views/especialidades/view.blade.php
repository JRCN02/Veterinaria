<div class="container mt-3" >
    <div class="row justify-content-end">
        <a class="ml-2" href="especialidad/form">
            <button class="btn btn-success">Agregar</button>
        </a>

    </div>
    <div class="row">
    @foreach ($especi as $item)
        
        <div class="col-md-4 my-2">
            <div class="card-body bg-primary text-center">
                
                
                <a class="ml-2 bg-warning p-2 float-right" href="especialidad/formUp?id={{ $item->id }}">
                    <i class="fa fa-search"></i>
                </a>
                <a class="ml-2 bg-danger p-2 float-right" href="especialidad/delete?id={{ $item->id }}">
                    <i class="fa fa-trash"></i>
                </a>
                <h4 class="card-title "> {{$item->nombre}} </h4>
                
                <p class="card-text text-justify"> </p>
                
            
                
                <a href="servicios?id={{ $item->id }}" class="bg-success p-2 m-1" style="display: inline-block; ">
                        <i class="fa fa-eye"> Ver servicio(s)</i>
                </a>
                
            

            </div>
            
        </div>
    @endforeach
    </div>
</div>    
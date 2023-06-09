<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-10 col-lg-10 col-xl-8 offset-xl-1">
            <div class="form-group">
                <form action="update" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$id}}">
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Nombre del servicio</label>
                    <input name="nombre" type="text" class="form-control form-control-lg" value="{{$service->nombre}}"/>
                    
                    <label class="form-label" for="form3Example3">Descripcion</label>
                    <input name="descripcion" type="text" class="form-control form-control-lg" value="{{$service->descripcion}}"/>
                    
                    <label class="form-label" for="form3Example3">Costo</label>
                    <input name="costo" type="number" class="form-control form-control-lg" value="{{$service->costo}}"/>
                    
                    <label class="form-label" for="form3Example3">Imagen</label>
                    <input name="imagen" type="file" class="form-control form-control-lg" value="{{$service->imagen}}"/>
                    
                </div>
                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                    Guardar
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
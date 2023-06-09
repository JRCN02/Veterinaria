<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-10 col-lg-10 col-xl-8 offset-xl-1">
            <div class="form-group">
                <form action="add" method="post" enctype="multipart/form-data">
                    @csrf
                
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Nombre de la Especialidad</label>
                    <input name="nombre" type="text" class="form-control form-control-lg" placeholder="Nombre" />
                    
                <br>
                <br>
                <br>
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
@extends('app')
        @section('contenido')
        <div class="card">
            <div class="card-header">
              Registro Categoría
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="row mb-3">
                    <label for="detalleCategoria" class="col-sm-2 col-form-label">Detalle Categoría: </label>
                    <div class="col-sm-2">
                        <input type="text" name="txtdetaCate" id="detalleCategoria" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="observacion" class="col-sm-2 col-form-label">Observación: </label>
                    <div class="col-sm-4">
                        <input type="text" name="txtobse" id="observacion" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-2">
                        <input type="submit" value="Enviar" class="btn btn-primary">
                    </div>
                    
                </div>
              </form>
            </div>
          </div>
    @endsection
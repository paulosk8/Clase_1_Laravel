@extends('app')
        @section('contenido')
        <div class="card">
            <div class="card-header">
              Registro Cliente
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="row mb-3">
                    <label for="cedula" class="col-sm-2 col-form-label">Cédula: </label>
                    <div class="col-sm-2">
                        <input type="text" name="txtcedu" id="cedula" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nombres" class="col-sm-2 col-form-label">Nombres: </label>
                    <div class="col-sm-4">
                        <input type="text" name="txtnom" id="nombres" class="form-control">
                    </div>
                    <label for="apellidos" class="col-sm-2 col-form-label">Apellidos: </label>
                    <div class="col-sm-4">
                        <input type="text" name="txtapel" id="apellidos" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="telefono" class="col-sm-2 col-form-label">Teléfono: </label>
                    <div class="col-sm-4">
                        <input type="text" name="txttelf" id="telefono" class="form-control">
                    </div>
                    <label for="correo" class="col-sm-2 col-form-label">Correo: </label>
                    <div class="col-sm-4">
                        <input type="text" name="txtcorr" id="correo" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="direccion" class="col-sm-2 col-form-label">Dirección: </label>
                    <div class="col-sm-10">
                        <input type="text" name="txtdire" id="direccion" class="form-control">
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
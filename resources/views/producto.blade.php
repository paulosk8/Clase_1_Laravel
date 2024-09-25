@extends('app')
        @section('contenido')
        <div class="card">
            <div class="card-header">
              Registro Producto
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="row mb-3">
                    <label for="detalle" class="col-sm-2 col-form-label">Detalle: </label>
                    <div class="col-sm-2">
                        <input type="text" name="txtdeta" id="detalle" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="codiCate" class="col-sm-2 col-form-label">Cödigo Categoría: </label>
                    <div class="col-sm-4">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Lista
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </div>
                    </div>
                    <label for="precio" class="col-sm-2 col-form-label">Precio: </label>
                    <div class="col-sm-4">
                        <input type="text" name="txtprec" id="precio" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="precioVenta" class="col-sm-2 col-form-label">Preco de venta: </label>
                    <div class="col-sm-4">
                        <input type="text" name="txtpreVent" id="precioVenta" class="form-control">
                    </div>
                    <label for="cateProduct" class="col-sm-2 col-form-label">Categía producto: </label>
                    <div class="col-sm-4">
                        <input type="text" name="txtcateProduc" id="cateProduct" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="observacion" class="col-sm-2 col-form-label">Observación: </label>
                    <div class="col-sm-10">
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
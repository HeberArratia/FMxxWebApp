@extends('layouts.main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Nuevo Modelo
    <small></small>
  </h1> 
</section>

<!-- Main content -->
<section class="content">
 
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Crear un nuevo modelo</h3>
        </div>
        <form class="form-horizontal">
          <div class="box-body">
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nombre:</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="" placeholder="Nombre del modelo">
              </div>
            </div>

 

            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Descripción</label>

              <div class="col-sm-10">
                <textarea class="form-control" rows="3" placeholder="Descripción del modelo"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-2 control-label">Modelo</label>

              <div class="col-sm-10">
                <input type="file" id="exampleInputFile">

                <p class="help-block">Subir modelo con extensión...</p>
              </div>
            </div>

            
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-default">Volver</button>
            <button type="submit" class="btn btn-primary pull-right">Crear</button>
          </div>
          <!-- /.box-footer -->
        </form>
        <!-- /.box-body -->
      </div>
    </div>
    <!-- /.col -->
  </div>

</section>
<!-- /.content -->
@stop
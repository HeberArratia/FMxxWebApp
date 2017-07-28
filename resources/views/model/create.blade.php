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

        <div class="box-body">
          {!!Form::open(['route'=>'model.store', 'files' => true, 'method'=>'POST', 'class' => 'form-horizontal'])!!}

            <div class="form-group has-feedback">
              {!! Form::label('name', 'Nombre:', ['class' => 'col-sm-2 control-label']); !!}
              <div class="col-sm-10">
                {!!Form::text('name', null,['class'=>'form-control', 'placeholder' => 'Nombre del modelo'])!!}
              </div>
            </div>

            <div class="form-group has-feedback">
              {!! Form::label('des', 'Descripción:', ['class' => 'col-sm-2 control-label']); !!}
              <div class="col-sm-10">
                {!!Form::textarea('des', null,['class'=>'form-control', 'placeholder' => 'Descripción del modelo', 'rows' => 3])!!}
              </div>
            </div>

            <div class="form-group has-feedback">
              {!! Form::label('path', 'Modelo:', ['class' => 'col-sm-2 control-label']); !!}
              <div class="col-sm-10">
                {!!Form::file('path')!!}
                <p class="help-block">Subir modelo con extensión...</p>
              </div>
            </div>

            <div class="box-footer">
            <a href="/app/model" class="btn btn-default">Volver</a>
            {!!Form::submit('Crear', ['class'=>'btn btn-primary pull-right'])!!}
          </div>

          {!!Form::close()!!}

        </div>

        <!--
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
    
          <div class="box-footer">
            <button type="submit" class="btn btn-default">Volver</button>
            <button type="submit" class="btn btn-primary pull-right">Crear</button>
          </div>

        </form>
        -->
        <!-- /.box-body -->
      </div>
    </div>
    <!-- /.col -->
  </div>

</section>
<!-- /.content -->
@stop
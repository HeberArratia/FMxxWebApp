@extends('layouts.main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Modificar Modelo
    <small></small>
  </h1> 
</section>

<!-- Main content -->
<section class="content">
 
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Modificar el modelo: </h3>
        </div>

        <div class="box-body">

            <div class="callout callout-info">
                <p>Al editar un modelo, se va a crear una nueva versión de este.</p>
            </div>
            
            @if(count($errors) > 0)
                <div class="callout callout-danger">
                    <h4>Error al modificar modelo</h4>

                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

          {!! Form::model($modelData, ['method' => 'PUT','route' => ['model.update', $modelId], 'files' => true, 'class' => 'form-horizontal']) !!}

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
                <p class="help-block">Subir modelo con extensión jpeg, png, jpg o svg.</p>
              </div>
            </div>

            <div class="box-footer">
            <a href="/app/model" class="btn btn-default">Volver</a>
            {!!Form::submit('Crear', ['class'=>'btn btn-primary pull-right'])!!}
          </div>

          {!!Form::close()!!}

        </div>
        <!-- /.box-body -->
      </div>
    </div>
    <!-- /.col -->
  </div>

</section>
<!-- /.content -->
@stop
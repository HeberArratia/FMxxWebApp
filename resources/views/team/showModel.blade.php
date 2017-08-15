@extends('layouts.main')

@section('content')

<!-- Content Header (Page header) -->
<style>
  .img-show-data{
    width: 100%;
    height: auto;
  }
  .select-version{
    border-left: 4px solid steelblue;
  }
  .card-version{
    padding-bottom: 10px;
    padding-top: 10px;
    padding-left: 8px;
  }
  .card-version p{
    margin: 0;
  }
  hr{
    margin: 0;
  }
  
</style>

 

<section class="content-header">


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <i class="fa fa-group"></i>
        {{ $team->name }} | Creado por: {{ $authorName }} ({{ $authorMail }})
      </a>
    </div>
  </div>
</nav>

  <h1>
    {!! $currentData->name !!}
    <small></small>
  </h1>
  <p>{!! $currentData->des !!}</p>

</section>

<!-- Main content -->
<section class="content">
 
  <div class="row">
    <div class="col-md-8">
      <div class="box">
        <img class="img-center img-show-data" src="/models/{{ $currentData->path }}" alt="">
      </div>
    </div>
    <!-- /.col -->


    <div class="col-md-4">
      
      <div class="box box-version">
        <div class="box-header">
          <h3 class="box-title">Versiones</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
       
          @foreach($datas as $data)
            <div class="card-version {{ $currentData->id == $data->id ? 'select-version' : ''}}">
              <strong><a href="{{ url('app/team/show/'.$team->id.'/'.$model->id.'/'.$data->id) }}">V{!! $count-- !!}: {!! $data->name !!}</a></strong>
              <p class="text-muted">
                <i class="fa fa-clock-o"></i> {!! $data->created_at !!}
              </p>
            </div>
            <hr>
          @endforeach

        </div>
        <!-- /.box-body -->
      </div>

    </div>
  </div>

  <div class="row">
  	
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Comentarios</h3>
        </div>
          <div class="box-body">
            		
				Aquí van los comentarios

          </div>
        <!-- /.box-body -->
      </div>
    </div>
    <!-- /.col -->

  </div>

</section>
<!-- /.content -->

@stop
@extends('layouts.main')

@section('content')

<!-- Content Header (Page header) -->
<style>
  .img-show-data{
    width: 100%;
    height: auto;
  }
</style>
<section class="content-header">
  <h1>
    {!! $currentData->name !!}
    <small></small>
  </h1>
  <p>{!! $currentData->des !!}</p>
  <div class="acciones-ver">

     <a href="{{ url('app/model/'.$model->id.'/edit') }}" class="btn btn-table btn-table-blue">
      <i class="fa fa-edit"></i>
    </a>

    <a class="btn btn-table btn-table-red">
      <i class="fa fa-trash"></i>
    </a>
    <a class="btn btn-table btn-table-green">
      <i class="fa fa-group"></i>
    </a>
              
  </div>
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
            <strong><a href="">V{!! $count-- !!}: {!! $data->name !!}</a></strong>
            <p class="text-muted">
              <i class="fa fa-clock-o"></i> {!! $data->created_at !!}
            </p>
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
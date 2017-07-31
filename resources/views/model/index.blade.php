@extends('layouts.main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Mi Repositorio
    <small>Todos los modelos</small>
  </h1>
  <div class="n-btn pull-right">
    <a href="/app/model/create" type="button" class="btn btn-block btn-primary"><i class="fa fa-plus"></i> Nuevo modelo</a>
  </div>

 
</section>

<!-- Main content -->
<section class="content">
 
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-white">
        <div class="box-header">
          <div class="row">
            <div class="col-xs-12">
              <!--<h3 class="box-title ">Todos los modelos</h3>-->
              @if (session('msg'))
                <div class="callout callout-success">
                  <p>{!! session('msg') !!}</p>
                </div>
              @endif
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <table id="table-main" class="table table-striped table-show">
            <thead>
            <tr>
              <th>Nombre</th>
              <th>Creado</th>
              <th>Modificado</th>
              <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach($modelDatas as $modelData)
                <tr>
                  <td><i class="fa fa-sitemap"></i> {{$modelData->name}}</td>
                  <td>{{$modelData->modelCreate}}</td>
                  <td>{{$modelData->updated_at}}</td>
                  <td class="">

                    <a href="{{ url('app/model/show/'.$modelData->modelId.'/edit') }}" class="btn btn-table btn-table-yellow">
                      <i class="fa fa-eye"></i>
                    </a>
                  
                    <a href="{{ url('app/model/'.$modelData->modelId.'/edit') }}" class="btn btn-table btn-table-blue">
                      <i class="fa fa-edit"></i>
                    </a>

                    <a class="btn btn-table btn-table-red">
                      <i class="fa fa-trash"></i>
                    </a>
                    <button class="btn btn-table btn-table-green" data-toggle="modal" data-target="#modal-primary">
                      <i class="fa fa-group"></i>
                    </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
            
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>

</section>


  <div class="modal fade moda-share" id="modal-primary">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Compartir en equipo de trabajo</h4>
        </div>
        <div class="modal-body">
         
           
           <form class="form-horizontal">
              <label for="" class="control-label">Nombre:</label>
              <div class="form-group">
                

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="" placeholder="Nombre del equipo">
                </div>
                <div class="col-sm-2">
                   <button type="submit" class="btn btn-primary pull-right">Compartir</button>
                </div>
              </div>

          </form>

          <h3>Compartido en:</h3>
          <div class="team-share-content">
            <div class="team-share">
              <span>Nombre equipo Nombre equipo 22</span>
              <button class="btn btn-table btn-table-red">
                <i class="fa fa-trash"></i>
              </button>
            </div>

            <div class="team-share">
              <span>Nombre equipo</span>
              <button class="btn btn-table btn-table-red">
                <i class="fa fa-trash"></i>
              </button>
            </div>

            <div class="team-share">
              <span>Nombre equipo</span>
              <button class="btn btn-table btn-table-red">
                <i class="fa fa-trash"></i>
              </button>
            </div>

            <div class="team-share">
              <span>Nombre equipo</span>
              <button class="btn btn-table btn-table-red">
                <i class="fa fa-trash"></i>
              </button>
            </div>

            <div class="team-share">
              <span>Nombre equipo</span>
              <button class="btn btn-table btn-table-red">
                <i class="fa fa-trash"></i>
              </button>
            </div>

            <div class="team-share">
              <span>Nombre equipo</span>
              <button class="btn btn-table btn-table-red">
                <i class="fa fa-trash"></i>
              </button>
            </div>

            <div class="team-share">
              <span>Nombre equipo</span>
              <button class="btn btn-table btn-table-red">
                <i class="fa fa-trash"></i>
              </button>
            </div>
          </div>



        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

<!-- /.content -->  
@stop 
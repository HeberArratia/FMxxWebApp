@extends('layouts.main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Equipos de trabajo
  </h1>
  <div class="n-btn pull-right">
    <a href="/app/team/create" type="button" class="btn btn-block btn-primary"><i class="fa fa-plus"></i> Nuevo equipo</a>
  </div>

 
</section>

<!-- Main content -->
<section class="content">
 
  <div class="row">
    <div class="col-xs-12">
      <div class="box ">
        <div class="box-header">

          <div class="row">
            <div class="col-xs-5 box-title-me">
              <h3 class="box-title">Todos los equipos de trabajo</h3>
            </div>
            <div class="col-xs-7">
              <div class="filtros pull-right">
            
                <div class="btn-group" role="group" aria-label="...">
                  <button id="filter-todos" type="button" class="btn btn-default">Todos</button>
                  <button id="filter-creados" type="button" class="btn btn-default">Creados</button>
                  <button id="filter-miembro" type="button" class="btn btn-default">Miembro</button>
                </div>
              </div> 
            </div>

          </div>

          <div class="row">
            <div class="col-xs-12">
              @if (session('msg'))
                </br>
                <div class="callout callout-success">
                  <p>{!! session('msg') !!}</p>
                </div>
              @endif
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

          <table id="table-main" class="table table-striped">
            <thead>
            <tr>
              <th>Equipo</th>
              <th>Descripción</th>
              <th>Creador</th>
              <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                <tr>
                  <td><i class="fa fa-group"></i> {{ $team->name }}</td>
                  <td>{{ $team ->des }}  </td>
                  <td>adasd</td>
                  <td class="">

                    <a href="{{ url('app/model/show/') }}" class="btn btn-table btn-table-yellow">
                      <i class="fa fa-eye"></i>
                    </a>
                  
                    <a href="{{ url('app/model/'.'algo'.'/edit') }}" class="btn btn-table btn-table-blue">
                      <i class="fa fa-edit"></i>
                    </a>

                    <a class="btn btn-table btn-table-green" onclick="deleteModel()">
                      <i class="fa fa-user-plus"></i>
                    </a>
             

                    <a class="btn btn-table btn-table-red" onclick="deleteModel()">
                      <i class="fa fa-trash"></i>
                    </a>
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

  <script>
    
  </script>
  <!-- /.modal -->

<!-- /.content -->  
@stop 
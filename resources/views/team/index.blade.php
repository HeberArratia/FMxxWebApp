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
              <h3 class="box-title" id="title-teams">Todos los equipos de trabajo</h3>
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
                @foreach($teamsC as $team)
                <tr>
                  <td><i class="fa fa-group"></i> {{ $team->name }}</td>
                  <td>{{ $team->des }}  </td>
                  <td>{{ $team->creator }}</td>
                  <td class="">

                    <a href="{{ url('app/team/show/') }}" class="btn btn-table btn-table-yellow">
                      <i class="fa fa-eye"></i>
                    </a>
                  
                    <a href="{{ url('app/team/'.'algo'.'/edit') }}" class="btn btn-table btn-table-blue">
                      <i class="fa fa-edit"></i>
                    </a>

                    <button class="btn btn-table btn-table-green" onclick="editUsers('{!! $team->name !!}', {!! $team->id !!})">
                      <i class="fa fa-user-plus"></i>
                    </button>
             

                    <a class="btn btn-table btn-table-red" onclick="deleteTeam()">
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
          <h4 class="modal-title">Agregar usuarios al grupo</h4>
        </div>
        <div class="modal-body">
         
           <form class="">
              <p><strong for="" class="control-label">Emails de usuarios:</strong></p>

              <div class="form-group">
                <select class="form-control" id="input-update" multiple="multiple" style="width: 100%">
                  @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->email }}</option>
                  @endforeach
                </select>
              </div>

          </form>

        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" onclick="updateUsers()">Guardar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <script>
    var nameTeam = '';
    var idTeam = '';

   function editUsers(name, id){
      nameTeam = name;
      idTeam = id;

      $.ajax({
          url: 'team/users/' + idTeam,
          headers: {'X-CSRF-TOKEN': $('#token').val()},
          type: 'GET',
          success: function(result) {
              $("#input-update").val(result.ids);
              $('#input-update').select2();
              $('#modal-primary').modal('show');
          }
      });
    
   } 


   function updateUsers(){
      var valueEdit = $('#input-update').val();
      
      $.ajax({
          url: 'team/users/' + idTeam,
          data: {users: valueEdit},
          headers: {'X-CSRF-TOKEN': $('#token').val()},
          type: 'POST',
          success: function(result) {
              swal("Realizado!", "Se han agregado los usuarios al equipo indicado.", "success")
              $('#modal-primary').modal('hide');
          }
      });
   }
  </script>
  <!-- /.modal -->

<!-- /.content -->  
@stop 
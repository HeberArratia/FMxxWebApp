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

          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

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

                    <a href="{{ url('app/model/show/'.$modelData->modelId) }}" class="btn btn-table btn-table-yellow">
                      <i class="fa fa-eye"></i>
                    </a>
                  
                    <a href="{{ url('app/model/'.$modelData->modelId.'/edit') }}" class="btn btn-table btn-table-blue">
                      <i class="fa fa-edit"></i>
                    </a>

                    <a class="btn btn-table btn-table-red" onclick="deleteModel({!! $modelData->modelId !!}, '{!! $modelData->name !!}')">
                      <i class="fa fa-trash"></i>
                    </a>
                    
                    <button class="btn btn-table btn-table-green" onclick="editTeams('{!! $modelData->name !!}', {!! $modelData->modelId !!})">
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
         
           
           <form class="">
              <p><strong for="" class="control-label">Equipos:</strong></p>

              <div class="form-group">
                <select class="form-control" id="input-update" multiple="multiple" style="width: 100%">
                  @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                  @endforeach
                </select>
              </div>

          </form>

        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" onclick="updateTeams()">Guardar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <script>

   var nameModel = '';
   var idModel = '';

   function editTeams(name, id){
      nameModel = name;
      idModel = id;

      $.ajax({
          url: 'model/teams/' + idModel,
          headers: {'X-CSRF-TOKEN': $('#token').val()},
          type: 'GET',
          success: function(result) {
              $("#input-update").val(result.ids);
              $('#input-update').select2();
              $('#modal-primary').modal('show');
          }
      });
    
   } 


   function updateTeams(){
      var valueEdit = $('#input-update').val();
      
      $.ajax({
          url: 'model/teams/' + idModel,
          data: {teams: valueEdit},
          headers: {'X-CSRF-TOKEN': $('#token').val()},
          type: 'POST',
          success: function(result) {
              swal("Realizado!", "Se ha compartido el modelo en los grupos indicados", "success")
              $('#modal-primary').modal('hide');
          }
      });
   }

    function deleteModel(modelId, modelName){
      //swal("Es: " + modelId);
      swal({
        title: "Estas seguro?",
        text: "Se va a eliminar " + modelName + " y todas sus versiones de manera permanente",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, eliminalo!",
        closeOnConfirm: false
      },
      function(){

        $.ajax({
          url: 'model/' + modelId,
          headers: {'X-CSRF-TOKEN': $('#token').val()},
          type: 'DELETE',
          success: function(result) {
              window.location.replace("model");
          }
        });
      });
    }

  </script>
  <!-- /.modal -->

<!-- /.content -->  
@stop 
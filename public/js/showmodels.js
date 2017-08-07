$(function () {
    var table = $('#table-main').DataTable({
        "ordering": false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No se ha encontrado nada",
            "info": "Mostrar página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado desde _MAX_ registros)","sInfoPostFix":   "",
            "sSearch":        "Buscar:",
            "sUrl":           "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":    "Último",
                "sNext":    "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }

        }
    })


    table.columns( 2 ).search("").draw();
    $('#filter-todos').addClass('btn-primary');
    $('#filter-todos').removeClass('btn-default');

    $('#filter-creados').addClass('btn-default');
    $('#filter-creados').removeClass('btn-primary');
    
    $('#filter-miembro').addClass('btn-default');
    $('#filter-miembro').removeClass('btn-primary');

    $('body').on( 'click', '#filter-todos', function () {
      table.columns( 2 ).search("").draw();
      $('#filter-todos').addClass('btn-primary');
      $('#filter-todos').removeClass('btn-default');

      $('#filter-creados').addClass('btn-default');
      $('#filter-creados').removeClass('btn-primary');
      
      $('#filter-miembro').addClass('btn-default');
      $('#filter-miembro').removeClass('btn-primary');
      $('#title-teams').text('Todos los equipos de trabajo');
    } );
    $('body').on( 'click', '#filter-creados', function () {
      table.columns( 2 ).search("Creado por mi").draw();
      $('#filter-creados').addClass('btn-primary');
      $('#filter-creados').removeClass('btn-default');

      $('#filter-todos').addClass('btn-default');
      $('#filter-todos').removeClass('btn-primary');
      
      $('#filter-miembro').addClass('btn-default');
      $('#filter-miembro').removeClass('btn-primary');
      $('#title-teams').text('Equipos creados por mi');
    } );
    $('body').on( 'click', '#filter-miembro', function () {
      table.columns( 2 ).search("@").draw();
      $('#filter-miembro').addClass('btn-primary');
      $('#filter-miembro').removeClass('btn-default');

      $('#filter-todos').addClass('btn-default');
      $('#filter-todos').removeClass('btn-primary');
      
      $('#filter-creados').addClass('btn-default');
      $('#filter-creados').removeClass('btn-primary');
      $('#title-teams').text('Equipos en que soy miembro');
    } );
  })
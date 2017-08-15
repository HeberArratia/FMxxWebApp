<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FMxx Visor | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  {!!Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')!!}
   <!-- Font Awesome -->
  {!!Html::style('bower_components/font-awesome/css/font-awesome.min.css')!!}

  <!-- Ionicons -->
  {!!Html::style('bower_components/Ionicons/css/ionicons.min.css')!!}

  <!-- sweetalert -->
  {!!Html::style('css/sweetalert.css')!!}
  <!-- select2 -->
  {!!Html::style('css/select2.css')!!}

   <!-- DataTables -->
   {!!Html::style('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
  
  <!-- Theme style -->
  {!!Html::style('dist/css/AdminLTE.min.css')!!}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {!!Html::style('dist/css/skins/_all-skins.min.css')!!}    

  <!-- Date Picker -->
  {!!Html::style('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')!!} 

  <!-- Personal -->
  {!!Html::style('css/styles.css')!!}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>FM</b>xx</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>FMxx</b>Visor</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- img pequeña -->
               <img src="{{URL::asset('dist/img/userui.png')}}" alt="profile Pic" class="user-image">
          
              <span class="hidden-xs">{!! Auth::user()->name .' '. Auth::user()->lastname !!}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{URL::asset('dist/img/userui.png')}}" class="img-circle" alt="User Image">

                <p>
                  {!! Auth::user()->name .' '. Auth::user()->lastname !!}
                  <small>{!! Auth::user()->email !!}</small>
                </p>
              </li>
  
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Configurar</a>
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Cerrar sesión</a>
                </div>
              </li>
            </ul>

          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu principal</li>

        <li class="{{ strpos(Request::path(), 'model') == true ? 'active' : '' }}"><a href="/app/model"><i class="fa fa-book"></i> <span> Mi Repositorio</span></a></li>

        <li class="{{ strpos(Request::path(), 'team') == true ? 'active' : '' }}"><a href="/app/team"><i class="fa fa-group"></i> <span> Equipos de trabajo</span></a></li>   
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong> <a href="https://adminlte.io">FMxx</a></strong>
  </footer>

 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
{!!Html::script('bower_components/jquery/dist/jquery.min.js')!!}
<!-- jQuery UI 1.11.4 -->
{!!Html::script('bower_components/jquery-ui/jquery-ui.min.js')!!}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
{!!Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}

<!-- DataTables -->
{!!Html::script('bower_components/datatables.net/js/jquery.dataTables.min.js')!!}
{!!Html::script('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')!!}

<!-- moment -->
{!!Html::script('bower_components/moment/min/moment.min.js')!!}

<!-- datepicker -->
{!!Html::script('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')!!}

<!-- Bootstrap WYSIHTML5 -->
{!!Html::script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}
<!-- Slimscroll -->
{!!Html::script('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')!!}

<!-- FastClick -->
{!!Html::script('bower_components/fastclick/lib/fastclick.js')!!}

<!-- AdminLTE App -->
{!!Html::script('dist/js/adminlte.min.js')!!}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{!!Html::script('dist/js/pages/dashboard.js')!!}
<!-- AdminLTE for demo purposes -->
{!!Html::script('dist/js/demo.js')!!}

{!!Html::script('js/showmodels.js')!!}
<!-- sweetalerts -->
{!!Html::script('js/sweetalert.min.js')!!}
<!-- select2 -->
{!!Html::script('js/select2.min.js')!!}
<!-- listjs -->
{!!Html::script('js/list.js')!!}
<script>
  $(function(){
    $('.box-version .box-body').slimScroll({
        height: '500px',
        color: '#3C8DBC',
        size: '10px',
        alwaysVisible: false
    });

});

  var options = {
      valueNames: [ 'name', 'author' ]
  };

  var userList = new List('models', options)
</script>
</body>
</html>

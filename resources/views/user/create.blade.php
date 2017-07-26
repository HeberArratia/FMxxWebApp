<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FMxx | Entrar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  {!!Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')!!}

  <!-- Font Awesome -->
  {!!Html::style('bower_components/font-awesome/css/font-awesome.min.css')!!}

  <!-- Ionicons -->
  {!!Html::style('bower_components/Ionicons/css/ionicons.min.css')!!}

  <!-- Theme style -->
  {!!Html::style('dist/css/AdminLTE.min.css')!!}


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  {!!Html::style('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')!!}
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>FMxx </b>Visor</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h4 class="login-box-msg">REGISTRAR</h4>

    @if(count($errors) > 0)
      <div class="callout callout-danger">
          <h4>Error al registrar</h4>

          <ul>
            @foreach($errors->all() as $error)
              <li>{!! $error !!}</li>
            @endforeach
          </ul>
        </div>
    @endif
    

    {!!Form::open(['route'=>'user.store', 'method'=>'POST'])!!}
      <div class="form-group has-feedback">
        {!!Form::label('Correo electrónico')!!}
        {!!Form::email('email', null,['class'=>'form-control'])!!}
      </div>

      <div class="form-group has-feedback">
        {!!Form::label('Nombre')!!}
        {!!Form::text('name', null,['class'=>'form-control'])!!}
      </div>

      <div class="form-group has-feedback">
        {!!Form::label('Apellido')!!}
        {!!Form::text('lastname', null,['class'=>'form-control'])!!}
      </div>

      <div class="form-group has-feedback">
        {!!Form::label('Contraseña')!!}
        {!!Form::password('password', ['class'=>'form-control'])!!}
      </div>

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          {!!Form::submit('¡Registrarme ahora!', ['class'=>'btn btn-primary btn-block btn-flat '])!!}
        </div>
        <!-- /.col -->
      </div>

    {!!Form::close()!!}

    
    <!-- /. forms -->
    <br>
    <a href="#">Tienes una cuenta? Inicia sesión</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
{!!Html::script('bower_components/jquery/dist/jquery.min.js')!!}
<!-- Bootstrap 3.3.7 -->
{!!Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
</body>
</html>

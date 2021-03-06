@extends('layouts.main')

@section('content')

<style>
	.thumbnail .co-btn{
		height: 30px;
	}
	.thumbnail h3{
		margin-top: 0px;
	}
	.thumbnail a{

	}
	.head-show{
		margin: 0 auto;
		margin-top: -15px;
		background: steelblue;
		background-image: linear-gradient( 135deg, #CE9FFC 10%, #7367F0 100%);
		-webkit-box-shadow: 0px 0px 6px -1px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 0px 6px -1px rgba(0,0,0,0.75);
		box-shadow: 0px 0px 6px -1px rgba(0,0,0,0.75);
		margin-bottom: 20px;
	}
	.head-show h3{
		padding-top: 30px;
		color: #fff;
		text-align: center;
		font-size: 2.4em;
		font-weight: 300;
	}
    .head-show h6{
    	color: #fff;
    	text-align: center;
    	font-size: 1em;
    }
    #buscador{
    	padding-top: 10px;
    }
	#buscador .form-group{
		width: 90%;
		margin: 0 auto;
		margin-bottom: 25px;
		
	}
	#models ul{
		list-style: none;
		margin: 0;
		padding: 0;
	}
	#models li{
		padding-left: 0 !important;
	}
	.box-content-s{
		padding-left: 0px !important;
	}
	#models #users{
		padding-bottom: 5px;
	}

	#models #users .user-ind{
		background: #ce9340;
		padding: 6px 12px;
		color: #fff;
		border-radius: 5px;
		display: inline-block;
		margin-bottom: 6px;
	}
</style>
<section class="content">
	
	<div id="models">


		<div class="row">
			<div class="col-xs-12">
				<div class="head-show">
					<h3>{{ $team->name }}</h3>
					<h6>Creado por: {{ $authorName }} ({{ $authorMail }})</h6>
					<div class="row" id="buscador">
				     	<div class="col-xs-12">
				     		<div class="form-group">
							    <div class="input-group">
							      	<div class="input-group-addon">
							      		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							      	</div>
							      	<input type="text" class="form-control search" placeholder="Buscar modelo">
							    </div>
							</div>
				     	</div>
				     </div>
		     	</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				
				<ul class="list">

					@foreach($models as $model)
				  	<li class="col-sm-6">
					    <div class="thumbnail">
					       <img class="" src="/models/{{ $model->path }}" alt="">
					      <div class="caption">
					        <h3 class="name">{{ $model->name }}</h3>
					        <p>Creado por: <span class="author">{{ $model->modelAuthor }}</span></p>
					        <div class="co-btn">
					        	<a href="{{ url('app/team/show/'.$team->id.'/'.$model->modelId) }}" class="btn btn-primary pull-right" role="button"> <i class="fa fa-eye"></i> Visualizar</a>

					        </div>
					      </div>
					    </div>
					  </li>
					  @endforeach

				  </ul>	

			</div>
			<div class="col-md-4 box-content-s">
					<div class="box">
				        <div class="box-header">
				          <h3 class="box-title">Descripción</h3>
				        </div>
				        <!-- /.box-header -->
				        <div class="box-body">
				       		
				       		<p>{{ $team->des }}</p>

				        </div>
			        <!-- /.box-body -->
			      	</div>

					<div class="box">
				        <div class="box-header">
				          <h3 class="box-title">Miembros</h3>
				        </div>
				        <!-- /.box-header -->
				        <div class="box-body">

				       		<div id="users">

				       			@foreach($users as $user)

				       				<span class="user-ind">{{ $user->email }}</span>
				       			
				       			 @endforeach
				       		</div>

				        </div>
			        <!-- /.box-body -->
			      	</div>
			</div>

		</div>

    </div>


</section>
<!-- /.content -->

@stop
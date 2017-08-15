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


<div >
  <ol class="breadcrumb">
    <li><a href="{{ url('app/team/') }}"><i class="fa fa-group"></i> Equipos de trabajo</a></li>
    <li><a href="{{ url('app/team/'.$team->id) }}">{{ $team->name }}</a></li>
    <li class="active">{!! $currentData->name !!}</li>
  </ol>
</div>

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
            		
				<div id="disqus_thread"></div>
            <script>

            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://fmxxapp.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            

          </div>
        <!-- /.box-body -->
      </div>
    </div>
    <!-- /.col -->

  </div>

</section>
<!-- /.content -->

@stop
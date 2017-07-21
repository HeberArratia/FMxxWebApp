@extends('layouts.main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Mi Repositorio
    <small></small>
  </h1>
  <div class="n-btn pull-right">
    <button type="button" class="btn btn-block btn-primary"><i class="fa fa-plus"></i> Nuevo modelo</button>
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
              <h3 class="box-title ">Todos los modelos</h3>
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
            <tr>
              <td><i class="fa fa-sitemap"></i> Trident final rident final</td>
              <td>Internet
                Explorer 4.0
              </td>
              <td>Win 95+</td>
              <td class="">
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
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
            <tr>
              <td><i class="fa fa-sitemap"></i> Trident</td>
              <td>Internet
                Explorer 5.0
              </td>
              <td>Win 95+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
              
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Trident</td>
              <td>Internet
                Explorer 5.5
              </td>
              <td>Win 95+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
            
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Trident</td>
              <td>Internet
                Explorer 6
              </td>
              <td>Win 98+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
              
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Trident</td>
              <td>Internet Explorer 7</td>
              <td>Win XP SP2+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Trident</td>
              <td>AOL browser (AOL desktop)</td>
              <td>Win XP</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
              
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Firefox 1.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
              
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Firefox 1.5</td>
              <td>Win 98+ / OSX.2+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Firefox 2.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
            
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Firefox 3.0</td>
              <td>Win 2k+ / OSX.3+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
              
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Camino 1.0</td>
              <td>OSX.2+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
              
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Camino 1.5</td>
              <td>OSX.3+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
           
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Netscape 7.2</td>
              <td>Win 95+ / Mac OS 8.6-9.2</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Netscape Browser 8</td>
              <td>Win 98SE+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
              
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Netscape Navigator 9</td>
              <td>Win 98+ / OSX.2+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
            
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Mozilla 1.0</td>
              <td>Win 95+ / OSX.1+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Mozilla 1.1</td>
              <td>Win 95+ / OSX.1+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Mozilla 1.2</td>
              <td>Win 95+ / OSX.1+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
              
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Mozilla 1.3</td>
              <td>Win 95+ / OSX.1+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Mozilla 1.4</td>
              <td>Win 95+ / OSX.1+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Mozilla 1.5</td>
              <td>Win 95+ / OSX.1+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Mozilla 1.6</td>
              <td>Win 95+ / OSX.1+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
              
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Mozilla 1.7</td>
              <td>Win 98+ / OSX.1+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
           
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Mozilla 1.8</td>
              <td>Win 98+ / OSX.1+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
              
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Seamonkey 1.1</td>
              <td>Win 98+ / OSX.2+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Gecko</td>
              <td>Epiphany 2.20</td>
              <td>Gnome</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
              
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Webkit</td>
              <td>Safari 1.2</td>
              <td>OSX.3</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
          
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Webkit</td>
              <td>Safari 1.3</td>
              <td>OSX.3</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
            
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Webkit</td>
              <td>Safari 2.0</td>
              <td>OSX.4+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
           
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Webkit</td>
              <td>Safari 3.0</td>
              <td>OSX.4+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Webkit</td>
              <td>OmniWeb 5.5</td>
              <td>OSX.4+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
            
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Webkit</td>
              <td>iPod Touch / iPhone</td>
              <td>iPod</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Webkit</td>
              <td>S60</td>
              <td>S60</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
            
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Presto</td>
              <td>Opera 7.0</td>
              <td>Win 95+ / OSX.1+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Presto</td>
              <td>Opera 7.5</td>
              <td>Win 95+ / OSX.2+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Presto</td>
              <td>Opera 8.0</td>
              <td>Win 95+ / OSX.2+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Presto</td>
              <td>Opera 8.5</td>
              <td>Win 95+ / OSX.2+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
           
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Presto</td>
              <td>Opera 9.0</td>
              <td>Win 95+ / OSX.3+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
           
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Presto</td>
              <td>Opera 9.2</td>
              <td>Win 88+ / OSX.3+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
           
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Presto</td>
              <td>Opera 9.5</td>
              <td>Win 88+ / OSX.3+</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
            
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Presto</td>
              <td>Opera for Wii</td>
              <td>Wii</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
           
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Presto</td>
              <td>Nokia N800</td>
              <td>N800</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
           
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Presto</td>
              <td>Nintendo DS browser</td>
              <td>Nintendo DS</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
            
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> KHTML</td>
              <td>Konqureror 3.1</td>
              <td>KDE 3.1</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
              
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> KHTML</td>
              <td>Konqureror 3.3</td>
              <td>KDE 3.3</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
      
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> KHTML</td>
              <td>Konqureror 3.5</td>
              <td>KDE 3.5</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
          
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Tasman</td>
              <td>Internet Explorer 4.5</td>
              <td>Mac OS 8-9</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
        
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Tasman</td>
              <td>Internet Explorer 5.1</td>
              <td>Mac OS 7.6-9</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
          
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Tasman</td>
              <td>Internet Explorer 5.2</td>
              <td>Mac OS 8-X</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
        
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Misc</td>
              <td>NetFront 3.1</td>
              <td>Embedded devices</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
             
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Misc</td>
              <td>NetFront 3.4</td>
              <td>Embedded devices</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
         
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Misc</td>
              <td>Dillo 0.8</td>
              <td>Embedded devices</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
            
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Misc</td>
              <td>Links</td>
              <td>Text only</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
           
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Misc</td>
              <td>Lynx</td>
              <td>Text only</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
         
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Misc</td>
              <td>IE Mobile</td>
              <td>Windows Mobile 6</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
         
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Misc</td>
              <td>PSP browser</td>
              <td>PSP</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
           
            </tr>
            <tr>
              <td><i class="fa fa-sitemap"></i> Other browsers</td>
              <td>All others</td>
              <td>-</td>
              <td>
                <a class="btn btn-table btn-table-yellow">
                  <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-table btn-table-blue">
                  <i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-table btn-table-red">
                  <i class="fa fa-trash"></i>
                </a>
                <a class="btn btn-table btn-table-green">
                  <i class="fa fa-group"></i>
                </a>
              </td>
         
            </tr>
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
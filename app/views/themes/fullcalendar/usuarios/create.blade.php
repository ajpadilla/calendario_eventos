@extends('themes.fullcalendar.layouts.form_content')

@section('script')
@include('themes.fullcalendar.usuarios.partials.validarForm')
@stop()


@section('page_header')
<!-- /BREADCRUMBS -->
<div class="clearfix">
  <h3 class="content-title pull-left"></h3>
</div>
<div class="description"></div>
@stop

@section('form')
<div class="box border blue">
  <div class="box-title">
    <h4><i class="fa fa-reorder"></i>Agregar usuario</h4>
    <div class="tools hidden-xs">
      <a href="#box-config" data-toggle="modal" class="config">
        <i class="fa fa-cog"></i>
      </a>
      <a href="javascript:;" class="reload">
        <i class="fa fa-refresh"></i>
      </a>
      <a href="javascript:;" class="collapse">
        <i class="fa fa-chevron-up"></i>
      </a>
      <a href="javascript:;" class="remove">
        <i class="fa fa-times"></i>
      </a>
    </div>
  </div>
  <div class="box-body form">
    {{ Form::open(array('action' => 'SubsistemaController@store','class'=>'form-horizontal','id'=>'wizForm','novalidate'=>'novalidate','files'=>true)) }}
    <table class="table table-striped table-bordered">
      <tbody>
        <tr>
          <td>
           <div class="form-group">
           {{ Form::label('nombre', 'Nombre Usuario: ', array('class' => 'col-md-3 control-label')) }}
            <div class="col-md-6">
              {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control','id'=>'nombre')) }}
            </div>
          </div>
        </td> 
        <td>
           <div class="form-group">
           {{ Form::label('email', 'Email: ', array('class' => 'col-md-3 control-label')) }}
            <div class="col-md-8">
              {{ Form::text('email', Input::old('email'), array('class' => 'form-control','id'=>'email')) }}
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
             <div class="form-group">
           {{ Form::label('clave', 'Contraseña: ', array('class' => 'col-md-3 control-label')) }}
            <div class="col-md-6">
             {{ Form::password("clave",array('class' => 'form-control','id'=>'password')) }}
            </div>
          </div>
        </td>
        <td>
          <div class="form-group">
            {{ Form::label('rol', 'Rol: ',array('class' => 'col-md-3 control-label')) }}
            <div class="col-md-4">
              {{ Form::select('rol',array('1' => 'Administrador', '2' => 'Usuario'),Input::old('rol'),array('class' => 'form-control','id'=>'rol')) }}
            </div>
          </div>
        </td>
      </tr>
      <tr>
          <td colspan="2">
          <div class="wizard-buttons">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-offset-3 col-md-9">
                <a id="registrar" href="javascript:;" class="btn btn-primary nextBtn" id="registrar">
                  Registrar <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        </td>
      </tr>
    </tbody>
    {{ Form::close() }} 
  </table>
  
</div>
</div>
@stop


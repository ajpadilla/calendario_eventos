@extends('themes.fullcalendar.layouts.form_content')

@section('script')
@include('themes.fullcalendar.usuarios.partials.actualizarEmail')
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
           {{ Form::label('email', 'Email: ', array('class' => 'col-md-3 control-label')) }}
            <div class="col-md-8">
              {{ Form::text('email',$usuario->email, array('class' => 'form-control','id'=>'email')) }}
              {{ Form::text('id', $usuario->id, array('class' => 'form-control','style'=>'display: none;','id'=>'id')) }}
            </div>
          </div>
        </td>
         <td colspan="2">
          <div class="wizard-buttons">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-offset-3 col-md-9">
                <a id="registrar" href="javascript:;" class="btn btn-primary nextBtn" id="registrar">
                  Actualizar <i class="fa fa-arrow-circle-right"></i>
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
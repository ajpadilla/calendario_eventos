@extends('themes.fullcalendar.layouts.form_content')

@section('script')
@include('themes.fullcalendar.eventos.partials.dataTimePicker')
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
    <h4><i class="fa fa-reorder"></i>Agregar Evento</h4>
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
    {{ Form::open(array('url' => 'buscarEventosPorFecha','class'=>'form-horizontal','id'=>'formEvent','novalidate'=>'novalidate','files'=>true)) }}
    <div class="form-group">
    {{ Form::label('fecha_inicio', 'Fecha - Inicio: ',array('class' => 'col-md-3 control-label')) }}
      <div class="col-md-4">
      {{ Form::text('fecha_inicio', Input::old('fecha_inicio'), array('class' => 'form-control','id'=>'fecha_inicio'))}}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('fecha_final', 'Fecha - Final: ',array('class' => 'col-md-3 control-label')) }}
      <div class="col-md-4">
        {{ Form::text('fecha_final', Input::old('fecha_final'), array('class' => 'form-control','id'=>'fecha_final'))}}
      </div>
    </div>

    <div class="form-group">
      {{ Form::label('estatus', 'Estatus del evento: ',array('class'=>'control-label col-md-3')) }}
      <div class="col-md-4">
        {{ Form::select('estatus',array('Estatus' => array('Pendiente'=>'Pendiente','Realizado'=>'Realizado','No realizado'=>'No Realizado','Modificado'=>'Modificado')),Input::old('Estatus'),array('class' => 'form-control','id'=>'estatus')) }}
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-offset-3 col-md-9">
          {{ Form::submit('Buscar', array('class' => 'btn btn-success')) }}

        </div>
      </div>
    </div>
    {{ Form::close() }} 
  </div>
</div>
@stop


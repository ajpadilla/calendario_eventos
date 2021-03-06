@extends('themes.fullcalendar.layouts.form_content')

@section('script')
  @include('themes.fullcalendar.calendario.partials.scripts')
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
      <h4><i class="fa fa-reorder"></i>Calendario de eventos</h4>
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
 
          <div id='calendar'></div>
        <div id="add_event" class="popup cal-popup">
            <h2>Add event!</h2>
            <br/>
            <h1>Event title:</h1>
        <form id="formEvent">
        <div class="form-group">
          {{ Form::label('titulo', 'Titulo: ', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::text('titulo', Input::old('titulo'), array('class' => 'form-control','id'=>'titulo')) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('actividad', 'Actividad: ', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::text('actividad', Input::old('actividad'), array('class' => 'form-control','id'=>'actividad')) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('descripcion', 'Descripción: ', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::text('descripcion', Input::old('descripcion'), array('class' => 'form-control','id'=>'descripcion')) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('hora', 'Hora: ', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::text('hora', Input::old('hora'), array('class' => 'form-control','id'=>'hora')) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('direccion', 'Dirección: ', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control','id'=>'direccion')) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('observacion', 'Observación: ', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::text('observacion', Input::old('observacion'), array('class' => 'form-control','id'=>'observacion')) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('estatus', 'Estatus: ', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::text('estatus', Input::old('estatus'), array('class' => 'form-control','id'=>'estatus')) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('articulaciones', 'Articulaciones: ',array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::select('articulaciones',array(),Input::old('articulaciones'),array('class' => 'form-control','id'=>'articulaciones')) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('impactos', 'Impactos: ',array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::select('impactos',array(),Input::old('impactos'),array('class' => 'form-control','id'=>'impactos')) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('subsistemas', 'Subsistemas: ',array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::select('subsistemas',array(),Input::old('subsistemas'),array('class' => 'form-control','id'=>'subsistemas')) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('estados', 'Estados: ',array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::select('estados',array(),Input::old('estados'),array('class' => 'form-control','id'=>'estados')) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('municipios', 'Municipios: ',array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
            {{ Form::select('municipios',array(),Input::old('municipios'),array('class' => 'form-control','id'=>'municipios')) }}
          </div>
        </div>
        <hr/>
        <!--<div class="row">
          <div class="col-md-12">
            <div class="col-md-offset-3 col-md-9">
              <a id="cancelar" href="javascript:;" class="btn btn-danger exit">Cancelar<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>-->
        </form>
      </div>
        </div>
  </div>
@stop



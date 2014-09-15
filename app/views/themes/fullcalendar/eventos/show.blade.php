
@extends('themes.fullcalendar.layouts.form_content')
@section('form')
<div class="box border blue">
<div class="box-title">
<h4><i class="fa fa-reorder"></i>Evento</h4>
<div class="tools hidden-xs">
<a href="#box-config" data-toggle="modal" class="config"><i class="fa fa-cog"></i></a>
<a href="javascript:;" class="reload"><i class="fa fa-refresh"></i></a>
<a href="javascript:;" class="collapse"><i class="fa fa-chevron-up"></i></a>
<a href="javascript:;" class="remove"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-body form">
    {{ Form::open(array('action' => 'EventController@store','class'=>'form-horizontal','id'=>'formWizardMunicipio','novalidate'=>'novalidate','files'=>true)) }}
        
     <div class="form-group">
        {{ Form::label('titulo', 'Titulo: ', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::text('titulo',$evento->title, array('class' => 'form-control', 'readonly')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('fecha', 'Fecha - Hora: ', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::text('nombre',$evento->start, array('class' => 'form-control', 'readonly')) }}
        </div>
    </div>
    
    <div class="form-group">
        {{ Form::label('estado', 'Estado: ', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::text('estado',$evento->municipio->estado->nombre, array('class' => 'form-control', 'readonly')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('municipio', 'Municipio: ', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::text('municipio',$evento->municipio->nombre, array('class' => 'form-control', 'readonly')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('articulacion', 'Articulación: ', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::text('articulacion',$evento->articulacion->nombre, array('class' => 'form-control', 'readonly')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('subsistema', 'Subsistema: ', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::text('subsistema',$evento->subsistema->nombre, array('class' => 'form-control', 'readonly')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('impacto', 'Impacto: ', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::text('impacto',$evento->impacto->nombre, array('class' => 'form-control', 'readonly')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('descripcion', 'Descripción: ', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::textarea('nombre',$evento->descripcion, array('class' => 'form-control','rows'=>'3','cols'=>'3', 'readonly')) }}
        </div>
    </div>
    
      <div class="form-group">
        {{ Form::label('direccion', 'Dirección: ', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::textarea('nombre',$evento->direccion, array('class' => 'form-control','rows'=>'3','cols'=>'3', 'readonly')) }}
        </div>
    </div>
    
      <div class="form-group">
        {{ Form::label('observacion', 'Observación: ', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::textarea('observacion',$evento->observacion, array('class' => 'form-control','rows'=>'3','cols'=>'3', 'readonly')) }}
        </div>
    </div>

   {{ Form::close() }}
</div>
</div>
@stop





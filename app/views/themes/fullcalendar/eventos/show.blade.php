
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
	<h1>Evento {{ $evento->title }}</h1>
    {{ Form::open(array('action' => 'EventController@store','class'=>'form-horizontal','id'=>'formWizardMunicipio','novalidate'=>'novalidate','files'=>true)) }}
    <div class="form-group">
        {{ Form::label('Fecha', 'Fecha - Hora: ', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::text('nombre',$evento->start, array('class' => 'form-control', 'readonly')) }}
        </div>
    </div>
   {{ Form::close() }}
</div>
</div>
@stop





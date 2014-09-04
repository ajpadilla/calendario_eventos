@extends('themes.fullcalendar.layouts.form_content')

@section('script')
	@include('themes.fullcalendar.estados.partials.validarEstadoUpdate')
@stop();

@section('page_header')
	<ul class="breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="#">Home</a>
		</li>
		<li>
			<a href="#">Form Elements</a>
			</li>
		<li>Forms</li>
	</ul>
		<!-- /BREADCRUMBS -->
	<div class="clearfix">
		<h3 class="content-title pull-left">Forms</h3>
	</div>
	<div class="description">Calendario de eventos</div>
@stop
@section('form')
	<div class="box border blue">
		<div class="box-title">
			<h4><i class="fa fa-reorder"></i>Agregar estado</h4>
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
			<h1>Editar estado {{ $estado->nombre }}</h1>
			{{ Form::open(array('action' => array('EstadoController@store'),'class'=>'form-horizontal','id'=>'formEstadoUpdate','novalidate'=>'novalidate','files'=>true)) }}
				<div class="form-group">
					{{ Form::label('nombre', 'Nombre: ', array('class' => 'col-md-3 control-label')) }}
					<div class="col-md-8">
						{{ Form::text('nombre', $estado->nombre, array('class' => 'form-control','id'=>'nombre')) }}
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8">
						{{ Form::text('id', $estado->id, array('class' => 'form-control','style'=>'display: none;','id'=>'id_estado')) }}
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-offset-3 col-md-9">
							<a id="enviar" href="javascript:;" class="btn btn-primary nextBtn">Guardar<i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
			{{ Form::close() }}
		</div>
	</div>
@stop

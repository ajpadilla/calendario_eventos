@extends('themes.fullcalendar.layouts.form_content')


@section('script')
	@include('themes.fullcalendar.municipios.partials.cargarEstados')
@stop

@section('page_header')
	<!-- /BREADCRUMBS -->
	<div class="clearfix">
		<h3 class="content-title pull-left">Forms</h3>
	</div>
	<div class="description">Calendario de eventos</div>
@stop

@section('form')
	<div class="box border blue">
		<div class="box-title">
			<h4><i class="fa fa-reorder"></i>Agregar municipio</h4>
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
		@include('themes.fullcalendar.municipios.formWizard')
	</div>
</div>
@stop

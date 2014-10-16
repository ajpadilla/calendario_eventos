@extends('themes.fullcalendar.layouts.form_content')
@section('form')
<div class="box border blue">
	<div class="box-title">
		<h4><i class="fa fa-reorder"></i>Revisiones</h4>
		<div class="tools hidden-xs">
			<a href="#box-config" data-toggle="modal" class="config"><i class="fa fa-cog"></i></a>
			<a href="javascript:;" class="reload"><i class="fa fa-refresh"></i></a>
			<a href="javascript:;" class="collapse"><i class="fa fa-chevron-up"></i></a>
			<a href="javascript:;" class="remove"><i class="fa fa-times"></i></a>
		</div>
	</div>
	<div class="box-body form">
		@if(!$revisiones->isEmpty())
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Id usuario</td>
					<td>Nombre del usuario</td>
					<td>Modelo modificado</td>
					<td>Objeto modificando</td>
					<td>Fecha modificación</td>
				</tr>
			</thead>
				<tbody>
					@foreach($revisiones as $key => $value)
					<tr>
						<td>{{ $value->user_id }}</td>
						<td>{{$users[$key]}}</td>
						<td>{{ $value->revisionable_type }}</td>
						<td>{{$value->key}}</td>
						<td>{{ $value->created_at }}</td>
					</tr>
					@endforeach
				</tbody>
		@else
			<p>No hay revisiones!</p>
		@endif
	</div>
</div>
@stop

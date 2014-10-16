@extends('themes.fullcalendar.layouts.form_content')
@section('form')
	<div class="box border blue">
		<div class="box-title">
			<h4><i class="fa fa-reorder"></i>Impactos</h4>
			<div class="tools hidden-xs">
			<a href="#box-config" data-toggle="modal" class="config"><i class="fa fa-cog"></i></a>
			<a href="javascript:;" class="reload"><i class="fa fa-refresh"></i></a>
			<a href="javascript:;" class="collapse"><i class="fa fa-chevron-up"></i></a>
			<a href="javascript:;" class="remove"><i class="fa fa-times"></i></a>
		</div>
	</div>
<div class="box-body form">
	@if(!$impactos->isEmpty())
		<h3>Lista de impactos</h3>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Editar</td>
				</tr>
			</thead>
				<tbody>
					@foreach($impactos as $impacto)
					<tr>
						<td>{{ $impacto->id }}</td>
						<td>{{ $impacto->nombre }}</td>
						<td><a href="{{URL::to('editarImpacto/'.$impacto->id)}}" class="btn btn-primary">Editar<i class="fa fa-arrow-circle-right"></i></a></td>
					</tr>
					@endforeach
				</tbody>
		</table>
		@else
		<p>No hay impactos!</p>
		@endif
	</div>
</div>
@stop










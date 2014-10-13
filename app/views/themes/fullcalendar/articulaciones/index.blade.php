@extends('themes.fullcalendar.layouts.form_content')
@section('form')
<div class="box border blue">
	<div class="box-title">
		<h4><i class="fa fa-reorder"></i>Articulación</h4>
		<div class="tools hidden-xs">
			<a href="#box-config" data-toggle="modal" class="config"><i class="fa fa-cog"></i></a>
			<a href="javascript:;" class="reload"><i class="fa fa-refresh"></i></a>
			<a href="javascript:;" class="collapse"><i class="fa fa-chevron-up"></i></a>
			<a href="javascript:;" class="remove"><i class="fa fa-times"></i></a>
		</div>
	</div>
	<div class="box-body form">
		@if(!$articulaciones->isEmpty())
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Editar</td>
					<td>Borrar</td>
				</tr>
			</thead>
				<tbody>
					@foreach($articulaciones as $articulacion)
					<tr>
						<td>{{ $articulacion->id }}</td>
						<td>{{ $articulacion->nombre }}</td>
						
						<td><a href="{{URL::to('editarArticulacion/'.$articulacion->id)}}" class="btn btn-primary">Editar<i class="fa fa-arrow-circle-right"></i></a></td>
						<td><a href="{{URL::to('borrarArticulacion/'.$articulacion->id)}}" class="btn btn-danger">Borrar<i class="fa fa-arrow-circle-right"></i></a></td>
					</tr>
					@endforeach
				</tbody>
		</table>
		@else
			<p>No hay articulaciones!</p>
		@endif
	</div>
</div>
@stop





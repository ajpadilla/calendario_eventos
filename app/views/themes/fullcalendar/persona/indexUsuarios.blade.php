@extends('themes.fullcalendar.calendario.form')

@section('form')
<div class="box border blue">
	<div class="box-title">
		<h4><i class="fa fa-reorder"></i>Personas</h4>
		<div class="tools hidden-xs">
			<a href="#box-config" data-toggle="modal" class="config"><i class="fa fa-cog"></i></a>
			<a href="javascript:;" class="reload"><i class="fa fa-refresh"></i></a>
			<a href="javascript:;" class="collapse"><i class="fa fa-chevron-up"></i></a>
			<a href="javascript:;" class="remove"><i class="fa fa-times"></i></a>
		</div>
	</div>
	<div class="box-body form">
			@if(!$personas->isEmpty())
				<h3>Lista de personas</h3>
				<table class="table table-striped table-bordered">
					<thead>
						<th>Cédula</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Editar</th>
					</thead>
					<tbody>
						@foreach ($personas as $persona)
							<tr>
								<td>{{ $persona->cedula }}</td>
								<td>{{ $persona->nombres }}</td>
								<td>{{ $persona->apellidos }}</td>
								<td><a href="{{URL::to('vistaEditarPersonas/'.$persona->id)}}" class="btn btn-primary">Editar<i class="fa fa-arrow-circle-right"></i></a></td>
							</tr>
						@endforeach						
					</tbody>					
					<tfoot>
					</tfoot>
				</table>
			@else 
					<p>No hay personas!</p>
			@endif

	</div>
</div>
@stop

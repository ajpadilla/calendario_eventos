@extends('layouts.main')

@section('body')
<div class="col-lg-offset-2  col-lg-8">	
	<div class="row">
		<div class="box">
			@if(!$personas->isEmpty())
				<h3>Lista de personas</h3>
				<table class='table'>
					<thead>
						<th>Cédula</th>
						<th>Primer Nombre</th>
						<th>Primer Apellido</th>
						<th>Email</th>
						<th>Acciones</th>
					</thead>
					<tbody>
						@foreach ($personas as $persona)
							<tr>
								<td>{{ $persona->cedula }}</td>
								<td>{{ $persona->primer_nombre }}</td>
								<td>{{ $persona->primer_apellido }}</td>
								<td>{{ $persona->email }}</td>
								<td>{{ link_to_route('personas.show', 'Ver perfil', array($persona->id), array('class' => 'btn btn-primary')) }}</td>
								<td>{{ link_to_route('personas.edit', 'Editar', array($persona->id), array('class' => 'btn btn-warning')) }}</td>								
								<td>
									{{ Form::open(array('method' => 'DELETE', 'route' => array('personas.destroy', $persona->id))) }}
										{{ Form::submit('Eliminar', array('class' => 'btn btn-danger')) }}
				                    {{ Form::close() }}
								</td>
							</tr>
						@endforeach						
					</tbody>					
					<tfoot>
						<td></td>
					</tfoot>
				</table>
			@else 
					<p>No hay personas!</p>
			@endif
		</div>
	</div>
</div>
@stop
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

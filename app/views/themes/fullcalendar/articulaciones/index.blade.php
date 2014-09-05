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
				<td><button  type="button" class="editar btn btn-primary">Editar</button></td>
				<td><button  type="button" class="borrar btn btn-danger">Borrar</button></td>
			</tr>
			@endforeach
		</tbody>
</table>

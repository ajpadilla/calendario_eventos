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
			@foreach($impactos as $impacto)
			<tr>
				<td>{{ $impacto->id }}</td>
				<td>{{ $impacto->nombre }}</td>
				<td><button  type="button" class="editar btn btn-primary">Editar</button></td>
				<td><button  type="button" class="borrar btn btn-danger">Borrar</button></td>
			</tr>
			@endforeach
		</tbody>
</table>

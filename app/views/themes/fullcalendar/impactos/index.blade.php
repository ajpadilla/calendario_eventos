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
				<td><a href="{{URL::to('editarImpacto/'.$impacto->id)}}" class="btn btn-primary">Editar<i class="fa fa-arrow-circle-right"></i></a></td>
<td><a href="" class="btn btn-danger">Borrar<i class="fa fa-arrow-circle-right"></i></a></td>
			</tr>
			@endforeach
		</tbody>
</table>

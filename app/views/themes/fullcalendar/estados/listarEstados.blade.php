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
			@foreach($estados as $estado)
			<tr>
				<td>{{ $estado->id }}</td>
				<td>{{ $estado->nombre }}</td>
				<td><a  href="{{URL::to('editarEstado/'.$estado->id)}}" class="btn btn-primary">Editar<i class="fa fa-arrow-circle-right"></i></a></td>
				<td><a  href="" class="btn btn-danger">Borrar<i class="fa fa-arrow-circle-right"></i></a></td>
			</tr>
			@endforeach
		</tbody>
</table>

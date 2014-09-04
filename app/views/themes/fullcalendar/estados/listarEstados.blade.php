<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>NOMBRE</td>
		</tr>
	</thead>
		<tbody>
			@foreach($estados as $estado)
			<tr>
				<td>{{ $estado->id }}</td>
				<td>{{ $estado->nombre }}</td>
			</tr>
			@endforeach
		</tbody>
</table>

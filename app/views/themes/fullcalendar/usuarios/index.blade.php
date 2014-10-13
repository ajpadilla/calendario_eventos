@extends('themes.fullcalendar.layouts.form_content')

@section('form')
<div class="box border blue">
	<div class="box-title">
		<h4><i class="fa fa-reorder"></i>Usuarios</h4>
		<div class="tools hidden-xs">
			<a href="#box-config" data-toggle="modal" class="config"><i class="fa fa-cog"></i></a>
			<a href="javascript:;" class="reload"><i class="fa fa-refresh"></i></a>
			<a href="javascript:;" class="collapse"><i class="fa fa-chevron-up"></i></a>
			<a href="javascript:;" class="remove"><i class="fa fa-times"></i></a>
		</div>
	</div>
	<div class="box-body form">
			@if(!$usuarios->isEmpty())
				<h3>Lista de usuarios</h3>
				<table class="table table-striped table-bordered">
					<thead>
						<th>Nombre</th>
						<th>Correo</th>
					</thead>
					<tbody>
						@foreach ($usuarios as $usuario)
							<tr>
								<td>{{ $usuario->username }}</td>
								<td>{{ $usuario->email }}</td>
							</tr>
						@endforeach						
					</tbody>					
					<tfoot>
					</tfoot>
				</table>
			@else 
					<p>No hay usuarios!</p>
			@endif

	</div>
</div>
@stop

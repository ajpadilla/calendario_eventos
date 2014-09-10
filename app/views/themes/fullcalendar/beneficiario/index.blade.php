@extends('themes.fullcalendar.layouts.form_content')
@section('form')
<div class="box border blue">
	<div class="box-title">
		<h4><i class="fa fa-reorder"></i>Estado</h4>
		<div class="tools hidden-xs">
			<a href="#box-config" data-toggle="modal" class="config"><i class="fa fa-cog"></i></a>
			<a href="javascript:;" class="reload"><i class="fa fa-refresh"></i></a>
			<a href="javascript:;" class="collapse"><i class="fa fa-chevron-up"></i></a>
			<a href="javascript:;" class="remove"><i class="fa fa-times"></i></a>
		</div>
	</div>
	<div class="box-body form">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Evento</td>
					<td>Nombre</td>
					<td>Apellido</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
</div>
@stop





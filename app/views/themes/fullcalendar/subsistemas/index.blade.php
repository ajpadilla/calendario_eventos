
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
@if(!$subsistemas->isEmpty())
<h3>Lista de subsistemas</h3>
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
			@foreach($subsistemas as $subsistema)
			<tr>
				<td>{{ $subsistema->id }}</td>
				<td>{{ $subsistema->nombre }}</td>
				<td><a href="{{URL::to('editarSubsistema/'.$subsistema->id)}}" class="btn btn-primary">Editar<i class="fa fa-arrow-circle-right"></i></a></td>
				<td><a href="" class="btn btn-danger">Borrar<i class="fa fa-arrow-circle-right"></i></a></td>
</tr>
			</tr>
			@endforeach
		</tbody>
</table>
@else
<p>No hay subsistemas!</p>
@endif
</div>
</div>
@stop





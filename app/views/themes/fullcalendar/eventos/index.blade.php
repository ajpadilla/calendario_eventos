
@extends('themes.fullcalendar.layouts.form_content')
@section('form')
<div class="box border blue">
<div class="box-title">
<h4><i class="fa fa-reorder"></i>Eventos</h4>
<div class="tools hidden-xs">
<a href="#box-config" data-toggle="modal" class="config"><i class="fa fa-cog"></i></a>
<a href="javascript:;" class="reload"><i class="fa fa-refresh"></i></a>
<a href="javascript:;" class="collapse"><i class="fa fa-chevron-up"></i></a>
<a href="javascript:;" class="remove"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-body form">
@if(!$eventos->isEmpty())
<h3>Lista de eventos</h3>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>Fecha - Hora</td>
			<td>Nombre</td>
			<td>Datos</td>
		</tr>
	</thead>
		<tbody>
			@foreach($eventos as $evento)
			<tr>
				<td>{{$evento->start}}</td>
				<td>{{$evento->title}}</td>	
				<td><a href="{{URL::to('mostrarEvento/'.$evento->id)}}" class="btn btn-primary">Ver<i class="fa fa-arrow-circle-right"></i></a></td>
			</tr>
			</tr>
			@endforeach
		</tbody>
</table>
@else
<p>No hay eventos!</p>
@endif
</div>
</div>
@stop





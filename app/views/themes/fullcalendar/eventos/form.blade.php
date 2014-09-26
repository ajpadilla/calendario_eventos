<div class="form-group">
	{{ Form::label('fecha_hora', 'Fecha - Hora: ',array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
		{{ Form::text('fecha_hora', Input::old('fecha_hora'), array('class' => 'form-control','id'=>'fecha_hora')) }}
	</div>
</div>
<div class="form-group">
	{{ Form::label('titulo', 'Titulo: ', array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
		{{ Form::text('titulo', Input::old('titulo'), array('class' => 'form-control','id'=>'titulo')) }}
	</div>
</div>
<div class="form-group">
	{{ Form::label('descripcion', 'Descripción: ', array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
		{{ Form::text('descripcion', Input::old('descripcion'), array('class' => 'form-control','id'=>'descripcion')) }}
	</div>
</div>
<div class="form-group">
	{{ Form::label('direccion', 'Dirección: ', array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
		{{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control','id'=>'direccion')) }}
	</div>
</div>
<div class="form-group">
	{{ Form::label('observacion', 'Observación: ', array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
		{{ Form::text('observacion', Input::old('observacion'), array('class' => 'form-control','id'=>'observacion')) }}
	</div>
</div>
<div class="form-group">
	{{ Form::label('articulaciones', 'Articulaciones: ',array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
		{{ Form::select('articulaciones',array(),Input::old('articulaciones'),array('class' => 'form-control','id'=>'articulaciones')) }}
	</div>
</div>
<div class="form-group">
	{{ Form::label('impactos', 'Impactos: ',array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
		{{ Form::select('impactos',array(),Input::old('impactos'),array('class' => 'form-control','id'=>'impactos')) }}
	</div>
</div>
<div class="form-group">
	{{ Form::label('subsistemas', 'Subsistemas: ',array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
		{{ Form::select('subsistemas',array(),Input::old('subsistemas'),array('class' => 'form-control','id'=>'subsistemas')) }}
	</div>
</div>
<div class="form-group">
	{{ Form::label('estados', 'Estados: ',array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
		{{ Form::select('estados',array(),Input::old('estados'),array('class' => 'form-control','id'=>'estados')) }}
	</div>
</div>
<div class="form-group">
	{{ Form::label('municipios', 'Municipios: ',array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
		{{ Form::select('municipios',array(),Input::old('municipios'),array('class' => 'form-control','id'=>'municipios')) }}
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-offset-3 col-md-9">
			<a id="registrar" href="javascript:;" class="btn btn-primary">Registrar<i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>
</div>
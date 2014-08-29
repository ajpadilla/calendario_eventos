{{ Form::open(array('action' => 'MunicipioController@store','class'=>'form-horizontal','id'=>'formMunicipios','novalidate'=>'novalidate','files'=>true)) }}	
	<div class="form-group">
		{{ Form::label('estado', 'Estado: ',array('class'=>'control-label col-md-3')) }}
		<div class="col-md-8">
		{{ Form::select('estados',array('' => '-- Seleccione --'),Input::old('estados'),array('class' => 'form-control','id'=>'estados')) }}
	</div>
</div>	
	<div class="form-group">
		{{ Form::label('nombre', 'Nombre: ', array('class' => 'col-md-3 control-label')) }}
		<div class="col-md-8">
		{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control','id'=>'nombre_municipio')) }}
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-offset-3 col-md-9">
				{{ Form::submit('Registrar', array('class' => 'btn btn-success submitBtn','id'=>'enviar_municipio' )) }}
			</div>
		</div>
	</div>
{{ Form::close() }}

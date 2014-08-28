<div class="form-group">
	{{ Form::label('nombre', 'Nombre: ', array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-8">
   		{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control','id'=>nombree')) }}
    </div>
</div>

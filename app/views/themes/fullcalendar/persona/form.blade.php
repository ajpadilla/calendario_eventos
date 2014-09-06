<div class="form-group">
	{{ Form::label('nacionalidad', 'Nacionalidad: ',array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-8">
    	{{ Form::select('nacionalidad',array('v' => 'V', 'e' => 'E'),Input::old('nacionalidad'),array('class' => 'form-control','id'=>'nacionalidad')) }}
    </div>
</div>
<div class="form-group">
	{{ Form::label('cedula', 'Cédula: ', array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-8">
   		{{ Form::text('cedula', Input::old('cedula'), array('class' => 'form-control','id'=>'cedula')) }}
    </div>
</div>
<div class="form-group">
	{{ Form::label('primer_nombre', 'Primer Nombre: ',array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
   		{{ Form::text('primer_nombre', Input::old('primer_nombre'), array('class' => 'form-control','id'=>'primer_nombre')) }}
    </div>
</div>
<div class="form-group">
	{{ Form::label('segundo_nombre', 'Segundo Nombre: ',array('class' => 'col-md-3 control-label')) }}
   	<div class="col-md-8">
    	{{ Form::text('segundo_nombre', Input::old('segundo_nombre'), array('class' => 'form-control','id'=>'segundo_nombre')) }}
   	</div>
</div>
<div class="form-group">
	{{ Form::label('primer_apellido', 'Primer Apellido: ',array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-8">
    	{{ Form::text('primer_apellido', Input::old('primer_apellido'), array('class' => 'form-control','id'=>'primer_apellido')) }}
    </div>
</div>
<div class="form-group">
	{{ Form::label('segundo_apellido', 'Segundo Apellido: ',array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-8">
    	{{ Form::text('segundo_apellido', Input::old('segundo_apellido'), array('class' => 'form-control','id'=>'segundo_apellido')) }}
   	</div>
</div>
<div class="form-group">
	{{ Form::label('fecha_nacimiento', 'Fecha de Nacimiento: ',array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
    	{{ Form::custom('date', 'fecha_nacimiento', Input::old('fecha_nacimiento'), array('class' => 'form-control','id'=>'fecha')) }}
    </div>
</div>
<div class="form-group">
	{{ Form::label('sexo', 'Género: ',array('class' => 'col-md-3 control-label')) }}
   	<div class="col-md-4">
    	Femenino {{ Form::radio('sexo', 'f', Input::old('sexo'), array('class' => 'radio-inline')) }}
        Masculino {{ Form::radio('sexo', 'm', Input::old('sexo'), array('class' => 'radio-inline')) }}
  	</div>
</div>
<div class="form-group">
	{{ Form::label('movil', 'Móvil: ',array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-8">
    	{{ Form::text('movil', Input::old('movil'), array('class' => 'form-control','id'=>'movil')) }}
    </div>
</div>
<div class="form-group">
	{{ Form::label('email', 'E-mail: ',array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
 		{{ Form::text('email', Input::old('email'), array('class' => 'form-control','id'=>'email')) }}
   	</div>
</div>
<div class="formgroup">
	{{ Form::label('foto', 'Foto: ',array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-8">
    	{{ Form::file('foto', Input::old('foto'), array('class' => 'form-control','id'=>'foto')) }}
   	</div>
</div>
<div class="wizard-buttons">
	<div class="row">
    	<div class="col-md-12">
        	<div class="col-md-offset-3 col-md-9">
            	<a href="javascript:;" class="btn btn-default prevBtn" style="display: none;">
                	<i class="fa fa-arrow-circle-left"></i> Back
               	</a>
                <a href="javascript:;" class="btn btn-primary nextBtn" id="persona">
                	Continue <i class="fa fa-arrow-circle-right"></i>
               	</a>
            </div>
		</div>
	</div>
</div>

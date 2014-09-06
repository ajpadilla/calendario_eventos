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
	{{ Form::label('nombre', 'Nombre: ',array('class' => 'col-md-3 control-label')) }}
	<div class="col-md-8">
   		{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control','id'=>'nombre')) }}
    </div>
</div>
<div class="form-group">
	{{ Form::label('apellido', 'Apellido: ',array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-8">
    	{{ Form::text('apellido', Input::old('apellido'), array('class' => 'form-control','id'=>'apellido')) }}
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
<div class="form-group">
	{{ Form::label('Dirección', 'Dirección: ',array('class'=>'control-label col-md-3')) }}
<div class="col-md-8">
	{{ Form::textarea('direccion', Input::old('direccion'), array('class' => 'form-control','rows'=>'3','cols'=>'3','id'=>'direccion')) }}
</div>
</div>
<div class="form-group">
	{{ Form::label('municipio', 'Municipio: ',array('class'=>'control-label col-md-3')) }}
<div class="col-md-8">
	{{ Form::select('municipio',array('' => '-- Seleccione --'),Input::old('municipio'),array('class' => 'form-control','id'=>'municipio')) }}
</div>
</div>
<div class="wizard-buttons">
	<div class="row">
    	<div class="col-md-12">
        	<div class="col-md-offset-3 col-md-9">
            	<a href="javascript:;" class="btn btn-default prevBtn" style="display: none;">
                	<i class="fa fa-arrow-circle-left"></i> Back
               	</a>
                <a id="registrar" href="javascript:;" class="btn btn-primary nextBtn" id="persona">
                	Registrar <i class="fa fa-arrow-circle-right"></i>
               	</a>
            </div>
		</div>
	</div>
</div>

	<div class="form-group">
		{{ Form::label('nombre', 'Nombre: ', array('class' => 'col-md-3 control-label')) }}
		<div class="col-md-8">
		{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control','id'=>'nombre')) }}
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-offset-3 col-md-9">
				<a id="registrar" href="javascript:;" class="btn btn-primary nextBtn">Registrar<i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>

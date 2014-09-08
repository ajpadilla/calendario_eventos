{{ Form::open(array('action' => 'MunicipioController@store','class'=>'form-horizontal','id'=>'formWizardMunicipio','novalidate'=>'novalidate','files'=>true)) }}		
<div class="form-group">
		{{ Form::label('estado', 'Estado: ',array('class'=>'control-label col-md-3','id'=>'estado')) }}
		<div class="col-md-8">
			{{ Form::select('estados',$estados,$estado,array('class' => 'form-control')) }}
		</div>
</div>	
	<div class="form-group">
		{{ Form::label('nombre', 'Nombre: ', array('class' => 'col-md-3 control-label')) }}
		<div class="col-md-8">
		{{ Form::text('nombre',$municipio->nombre, array('class' => 'form-control','id'=>'nombre_municipio')) }}
		{{ Form::text('id',$municipio->id, array('class' => 'form-control','style'=>'display: none;','id'=>'id')) }}
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-offset-3 col-md-9">
				<a id="registrarMunicipio" href="javascript:;" class="btn btn-primary nextBtn">Registrar<i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
{{ Form::close() }}	

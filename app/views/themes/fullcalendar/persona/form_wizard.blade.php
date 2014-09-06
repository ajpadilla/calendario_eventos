{{ Form::open(array('action' => 'PersonaController@store','class'=>'form-horizontal','id'=>'wizForm','novalidate'=>'novalidate','files'=>true)) }}
	<div class="wizard-form">
		<div class="wizard-content">
			<ul class="nav nav-pills nav-justified steps">
				<li class="active">
					<a href="#direccion_persona" data-toggle="tab" class="wiz-step">
						<span class="step-number">1</span>
						<span class="step-name"><i class="fa fa-check"></i> Crear Direccion </span>
					</a>
				</li>
				<li>
					<a href="#datos_persona" data-toggle="tab" class="wiz-step active">
						<span class="step-number">2</span>
						<span class="step-name"><i class="fa fa-check"></i> Crear Persona</span>
					</a>
				</li>
				<li>
					<a href="#confirmar" data-toggle="tab" class="wiz-step">
						<span class="step-number">3</span>
						<span class="step-name"><i class="fa fa-check"></i> Submit </span>
					</a>
				</li>
			</ul>
			<div id="bar" class="progress progress-striped progress-sm active" role="progressbar">
				<div class="progress-bar progress-bar-warning" style="width: 33.33333333333333%;"></div>
			</div>
			<div class="tab-content">
				<div class="alert alert-danger display-none">
					<a class="close" aria-hidden="true" href="#" data-dismiss="alert">×</a>
						Your form has errors. Please correct them to proceed.
				</div>
				<div class="alert alert-success display-none">
					<a class="close" aria-hidden="true" href="#" data-dismiss="alert">×</a>
						Your form validation is successful!
				</div>
				<div class="tab-pane active" id="direccion_persona">
					@include('direccion.form')
				</div>
				<div class="tab-pane" id="datos_persona">
					@include('persona.form')
				</div>
				<div class="tab-pane" id="confirmar">
					<h3 class="block">Submit account details</h3>
					<h4 class="form-section">Account Information</h4>
					<div class="well">
					</div>
					<h4 class="form-section">Payment Information</h4>
					<div class="well">	
					</div>
					<div class="wizard-buttons">
             			<div class="row">
                 			<div class="col-md-12">
                     			<div class="col-md-offset-3 col-md-9">
                         			<a href="javascript:;" class="btn btn-default prevBtn" style="display: none;">
                             			<i class="fa fa-arrow-circle-left"></i> Back
                         			</a>
                         			<a href="javascript:;" class="btn btn-primary nextBtn">
                             			Continue <i class="fa fa-arrow-circle-right"></i>
                        			</a>
                         		    {{ Form::submit('Registrar', array('class' => 'btn btn-success submitBtn','style'=>'display: none;' )) }}
                     			</div>
                 			</div>
            	 		</div>
         			</div>
				</div>
			</div>
		</div>
	</div>
{{ Form::close() }}	

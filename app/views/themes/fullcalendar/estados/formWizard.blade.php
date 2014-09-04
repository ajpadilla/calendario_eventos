{{ Form::open(array('action' => 'EstadoController@store','class'=>'form-horizontal','id'=>'wizForm','novalidate'=>'novalidate','files'=>true)) }}
<div class="wizard-form">
	<div class="wizard-content">
		<ul class="nav nav-pills nav-justified steps">
			<li class="active">
				<a href="#direccion_persona" data-toggle="tab" class="wiz-step">
				<span class="step-number">1</span>
				<span class="step-name"><i class="fa fa-check"></i>Agregar Estado</span>
				</a>
			</li>
			<li>
				<a href="#datos_persona" data-toggle="tab" class="wiz-step active">
				<span class="step-number">2</span>
				<span class="step-name"><i class="fa fa-check"></i>Lista de estados</span>
				</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="alert alert-danger display-none">
				<a class="close" aria-hidden="true" href="#" data-dismiss="alert">×</a>Your form has errors. Please correct them to proceed.
			</div>
			<div class="alert alert-success display-none">
				<a class="close" aria-hidden="true" href="#" data-dismiss="alert">×</a>Your form validation is successful!</div>
				<div class="tab-pane active" id="direccion_persona">
				</div>
				<div class="tab-pane" id="datos_persona">
				</div>
				<div class="tab-pane" id="confirmar">
					<h3 class="block">Submit account details</h3>
					<h4 class="form-section">Account Information</h4>
				<div class="well">
			</div>
			<h4 class="form-section">Payment Information</h4>
			<div class="well">	
			</div>
		</div>
	</div>
</div>
{{ Form::close() }}	

{{ Form::open(array('action' => 'MunicipioController@store','class'=>'form-horizontal','id'=>'formWizardMunicipio','novalidate'=>'novalidate','files'=>true)) }}
<div class="wizard-form">
	<div class="wizard-content">
		<ul class="nav nav-pills nav-justified steps">
			<li class="active">
				<a href="#agregar_municipio" data-toggle="tab" class="wiz-step">
				<span class="step-number">1</span>
				<span class="step-name"><i class="fa fa-check"></i> Crear Municipio</span>
				</a>
			</li>
			<li>
				<a href="#listar_muicipio" data-toggle="tab" class="wiz-step active">
				<span class="step-number">2</span>
				<span class="step-name"><i class="fa fa-check"></i> Listar Municipios</span>
				</a>
			</li>
		</ul>
		<div id="bar" class="progress progress-striped progress-sm active" role="progressbar">
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="agregar_municipio">
					 @include('themes.fullcalendar.municipios.form')
			</div>
			<div class="tab-pane" id="listar_muicipio">
					@include('themes.fullcalendar.municipios.index')
			</div>
				<div class="tab-pane" id="confirmar">
					<h3 class="block">Submit account details</h3>
					<h4 class="form-section">Account Information</h4>
				<div class="well">
			</div>
		</div>
	</div>
</div>
{{ Form::close() }}	

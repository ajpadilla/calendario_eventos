{{ Form::open(array('action' => 'MunicipioController@store','class'=>'form-horizontal','id'=>'formWizardEstado','novalidate'=>'novalidate','files'=>true)) }}
<div class="wizard-form">
	<div class="wizard-content">
		<ul class="nav nav-pills nav-justified steps">
			<li class="active">
				<a href="#agregar_estado" data-toggle="tab" class="wiz-step">
				<span class="step-number">1</span>
				<span class="step-name"><i class="fa fa-check"></i> Crear Estado </span>
				</a>
			</li>
			<li>
				<a href="#listar_estados" data-toggle="tab" class="wiz-step active">
				<span class="step-number">2</span>
				<span class="step-name"><i class="fa fa-check"></i> Listar Estado</span>
				</a>
			</li>
		</ul>
		<div id="bar" class="progress progress-striped progress-sm active" role="progressbar">
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="agregar_estado">
					 @include('themes.fullcalendar.municipios.form')
			</div>
			<div class="tab-pane" id="listar_estados">
					@include('themes.fullcalendar.municipios.index')
			</div>
			<div class="well">
			</div>
		</div>
	</div>
</div>
{{ Form::close() }}	

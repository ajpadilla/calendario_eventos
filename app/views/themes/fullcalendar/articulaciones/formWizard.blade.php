{{ Form::open(array('action' => 'ArticulacionController@store','class'=>'form-horizontal','id'=>'formWizard','novalidate'=>'novalidate','files'=>true)) }}
<div class="wizard-form">
	<div class="wizard-content">
		<ul class="nav nav-pills nav-justified steps">
			<li class="active">
				<a href="#agregar_estado" data-toggle="tab" class="wiz-step">
				<span class="step-number">1</span>
				<span class="step-name"><i class="fa fa-check"></i> Crear Articulación </span>
				</a>
			</li>
			<li>
				<a href="#listar_estados" data-toggle="tab" class="wiz-step active">
				<span class="step-number">2</span>
				<span class="step-name"><i class="fa fa-check"></i> Listar Articulación</span>
				</a>
			</li>
		</ul>
		<div id="bar" class="progress progress-striped progress-sm active" role="progressbar">
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="agregar_estado">
					 @include('themes.fullcalendar.articulaciones.form')
			</div>
			<div class="tab-pane" id="listar_estados">
					@include('themes.fullcalendar.articulaciones.index')
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

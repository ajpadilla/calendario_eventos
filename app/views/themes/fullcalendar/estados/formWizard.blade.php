{{ Form::open(array('action' => 'EstadoController@store','class'=>'form-horizontal','id'=>'formWizardEstado','novalidate'=>'novalidate','files'=>true)) }}
	@include('themes.fullcalendar.estados.formEstado')
{{ Form::close() }}	

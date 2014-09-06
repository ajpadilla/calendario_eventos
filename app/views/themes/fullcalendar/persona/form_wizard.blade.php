{{ Form::open(array('action' => 'PersonaController@store','class'=>'form-horizontal','id'=>'wizForm','novalidate'=>'novalidate','files'=>true)) }}
	@include('themes.fullcalendar.persona.form')
{{ Form::close() }}	

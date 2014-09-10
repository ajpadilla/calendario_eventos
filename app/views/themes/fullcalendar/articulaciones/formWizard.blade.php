{{ Form::open(array('action' => 'ArticulacionController@store','class'=>'form-horizontal','id'=>'formWizard','novalidate'=>'novalidate','files'=>true)) }}
	@include('themes.fullcalendar.articulaciones.form')
{{ Form::close() }}	

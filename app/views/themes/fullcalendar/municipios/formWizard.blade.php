{{ Form::open(array('action' => 'MunicipioController@store','class'=>'form-horizontal','id'=>'formWizardMunicipio','novalidate'=>'novalidate','files'=>true)) }}
					 @include('themes.fullcalendar.municipios.form')
{{ Form::close() }}	

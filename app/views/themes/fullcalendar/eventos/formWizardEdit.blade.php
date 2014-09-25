{{ Form::open(array('action' => 'EventController@store','class'=>'form-horizontal','id'=>'formEvent','novalidate'=>'novalidate','files'=>true)) }}
	@include('themes.fullcalendar.eventos.formEdit')
{{ Form::close() }}	

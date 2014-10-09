@extends('themes.fullcalendar.layouts.login')

@section('login')
<!-- LOGIN -->
<section id="login" class="visible">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-box-plain">
					<h2 class="bigintro">Iniciar Sesión</h2>
					<div class="divide-40"></div>
					{{ Form::open(array('url'=>'login','autocomplete' => 'off','role' =>'form')) }}

						<div class="form-group">
							{{ $errors->first("username") }}<br />
							{{ Form::label("username", "Usuario", array('class' => 'control-label')) }}
							<i class="fa fa-user"></i>
  							{{ Form::text("username", Input::old('username'), array('class' => 'form-control')) }}
						</div>
						<div class="form-group">
							{{ $errors->first("password") }}<br />
							{{ Form::label("password", "Password", array('class' => ' control-label')) }}
							<i class="fa fa-lock"></i>
  								{{ Form::password("password",array('class' => 'form-control ')) }}
						</div>
  						<div class="row form-actions" >
  							{{ Form::submit("Registrarse",array('class' => 'btn btn-danger')) }}
  						</div>
  					{{ Form::close() }}
					<div class="login-helpers">
						<a href="{{URL::to('requestBlade')}}">¿Olvidaste tu contraseña?</a> 
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/LOGIN -->
@stop

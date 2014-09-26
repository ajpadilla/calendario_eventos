@extends('themes.fullcalendar.cuenta_usuario.login')

@section('login')
<!-- LOGIN -->
<section id="login" class="visible">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-box-plain">
					<h2 class="bigintro">Registrarse</h2>
					<div class="divide-40"></div>
					{{ Form::open(array('action' => 'ArticulacionController@store','class'=>'form-horizontal','id'=>'formLogin','novalidate'=>'novalidate','role'=>'form','files'=>true)) }}
						<div class="form-group">
							{{ Form::label("username", "Usuario", array('class' => 'control-label')) }}
							<i class="fa fa-user"></i>
  							{{ Form::text("username", Input::old('username'), array('class' => 'form-control')) }}
						</div>
						<div class="form-group">
							{{ Form::label("password", "Password", array('class' => ' control-label')) }}
							<i class="fa fa-lock"></i>
  								{{ Form::password("password",array('class' => 'form-control ')) }}
						</div>
  						<div class="row form-actions" >
  							{{ Form::submit("Registrarse",array('class' => 'btn btn-danger')) }}
  						</div>
  					{{ Form::close() }}
					<div class="login-helpers">
						<a href="#" onclick="swapScreen('forgot');return false;">¿Olvidaste tu contraseña?</a> 
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/LOGIN -->
@stop

@section('forgot')
<!-- FORGOT PASSWORD -->
<section id="forgot">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-box-plain">
					<h2 class="bigintro">Recuperar Password</h2>
					<div class="divide-40"></div>
					<form role="form">
						<div class="form-group">
							<label for="exampleInputEmail1">Ingresa tu Email</label>
							<i class="fa fa-envelope"></i>
							<input type="email" class="form-control" id="exampleInputEmail1" >
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-info">Restablecer contraseña</button>
						</div>
					</form>
					<div class="login-helpers">
						<a href="#" onclick="swapScreen('login');return false;">Registrarse</a> <br>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- FORGOT PASSWORD -->
@stop
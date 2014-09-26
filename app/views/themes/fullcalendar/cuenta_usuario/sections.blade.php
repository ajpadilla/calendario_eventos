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
					<form role="form">
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<i class="fa fa-envelope"></i>
							<input type="email" class="form-control" id="exampleInputEmail1" >
						</div>
						<div class="form-group"> 
							<label for="exampleInputPassword1">Password</label>
							<i class="fa fa-lock"></i>
							<input type="password" class="form-control" id="exampleInputPassword1" >
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-danger">Submit</button>
						</div>
					</form>
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
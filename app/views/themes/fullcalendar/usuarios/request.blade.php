@extends('themes.fullcalendar.layouts.login')

@section('login')
<!-- LOGIN -->
<section id="login" class="visible">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-box-plain">
					<h2 class="bigintro">Restablecer password</h2>
					<div class="divide-40"></div>
					@if (Session::get("error"))
					{{ Session::get("error") }}<br />
					@endif
					@if (Session::get("status"))
					{{ Session::get("status") }}<br />
					@endif
					{{ Form::open(array('url'=>'user/request','autocomplete' => 'off','role' =>'form')) }}
					{{ Form::label("email", "Email") }}
					{{ Form::text("email", Input::old("email")) }}
					{{ Form::submit("reset") }}
					{{ Form::close() }}
					<div class="login-helpers">
						<a href="{{URL::to('login')}}">Iniciar Sesión</a> 
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/LOGIN -->
@stop


 
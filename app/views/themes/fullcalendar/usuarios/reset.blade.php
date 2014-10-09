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
                    {{ Form::open(array('url'=>'user/reset/'.$token, 'autocomplete' => 'off','role' =>'form')) }}
                    {{ $errors->first("token") }}<br />
                    {{ Form::label("email", "Email") }}
                    {{ Form::text("email", Input::get("email")) }}
                    {{ $errors->first("email") }}<br />
                    {{ Form::label("password", "Password") }}
                    {{ Form::password("password") }}
                    {{ $errors->first("password") }}<br />
                    {{ Form::label("password_confirmation", "Confirm") }}
                    {{ Form::password("password_confirmation") }}
                    {{ $errors->first("password_confirmation") }}<br />
                    {{ Form::submit("reset") }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</section>
<!--/LOGIN -->
@stop

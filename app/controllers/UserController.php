<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if ($this->isPostRequest()) 
		{
			$validator = $this->getLoginValidator();
			if ($validator->passes()) 
			{
				$credentials = $this->getLoginCredentials();
				if(Auth::attempt($credentials)) 
				{
					$user = Auth::user();
					if ($user->hasRole('Usuario')) {
						return Redirect::to('sesionUsuario');
					}else{
						if ($user->hasRole('Administrador')) {
							return Redirect::to('sessionAdministrador');
						}
					}
				}else{
					return Redirect::back()->withErrors([
						"password" => ["Password Invalido."]
						]);
				}
			}
			return Redirect::back()
			->withInput()
			->withErrors($validator);
		}
		return View::make('themes.fullcalendar.layouts.sections');
	}

	protected function isPostRequest()
	{
		return Input::server("REQUEST_METHOD") == "POST";
	}

	protected function getLoginValidator()
	{
		return Validator::make(Input::all(), [
			"username" => "required",
			"password" => "required"
			]);
	}	

	protected function getLoginCredentials()
	{
		return [
		"username" => Input::get("username"),
		"password" => Input::get("password")
		];
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::to('/');
	}

	public function request()
	{
		if ($this->isPostRequest())
		{

			$response = $this->getPasswordRemindResponse();

			if ($this->isInvalidUser($response)) {
				return Redirect::back()
				->withInput()
				->with("error", Lang::get($response));
			}

			return Redirect::back()
			->with("status", Lang::get($response));
		}

		return View::make('themes.fullcalendar.usuarios.request');
	}

	protected function getPasswordRemindResponse()
	{

		return Password::remind(Input::only("email"), function($message) {
			//$message->sender('noreply@test.com');
		    //$message->subject('Password Reminder');
		});
	}

	protected function isInvalidUser($response)
	{
		return $response === Password::INVALID_USER;
	}

	public function reset($token)
	{

		if ($this->isPostRequest()) {
			$credentials = Input::only(
				"email",
				"password",
				"password_confirmation"
				) + compact("token");
			
			$response = $this->resetPassword($credentials);
			
			if ($response === Password::PASSWORD_RESET) {
				return Redirect::to("login");
			}
			
			return Redirect::back()
			->withInput()
			->with("error", Lang::get($response));
		}
		
		return View::make('themes.fullcalendar.usuarios.reset', compact("token"));
	}
	
	protected function resetPassword($credentials)
	{
		return Password::reset($credentials, function($user, $pass) {
			$user->password = Hash::make($pass);
			$user->save();
		});
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function requestBlade()
	{
		return View::make('themes.fullcalendar.usuarios.request');
	}

	public function resertBlade()
	{
		return View::make('themes.fullcalendar.usuarios.reset');
	}
}

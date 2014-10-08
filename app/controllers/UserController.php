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


}

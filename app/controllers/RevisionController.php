<?php

class RevisionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /revision
	 *
	 * @return Response
	 */
	public function index()
	{
		$datos = array(array('usuarios' =>''));
		$users = array();
		$revisiones = Revision::all();
		$usuarios = User::all();
		foreach ($revisiones as $key => $value) {
			$user = User::find($value->user_id);
			$users[$key] = $user->username;
		}
		return View::make('themes.fullcalendar.revisiones.index',compact('revisiones','usuarios','users'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /revision/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /revision
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /revision/{id}
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
	 * GET /revision/{id}/edit
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
	 * PUT /revision/{id}
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
	 * DELETE /revision/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
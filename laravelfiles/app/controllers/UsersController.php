<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function getLogin(){
		if(Auth::check())
			return Redirect::to('/')->with('error', 'Vous êtes déjà connecté');
		return View::make('admin.login');
	}

	public function postLogin(){
		if(Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
    	    return Redirect::to('admin')->with('message', 'Bienvenue <b>'.Auth::user()->username.'</b> !');
		}else{
    		return Redirect::to('login')
	        ->with('error', 'Votre username/password est incorrect !')
	        ->withInput();
		}
	}


	public function getLogout() {
    	Auth::logout();
    	return Redirect::to('/')->with('error', 'Vous êtes déconnecté !');
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

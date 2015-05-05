<?php

class UsersController extends \BaseController {

	public function getLogin(){
		if(Auth::check())
			return Redirect::to('/')->with('error', 'Vous êtes déjà connecté');
		return View::make('admin.login');
	}

	public function postLogin(){
		if(Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
    	    return Redirect::to('admin')->with('message', 'Bienvenue <b>Papa</b> !');
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


}

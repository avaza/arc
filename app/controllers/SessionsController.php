<?php

//use Arc\Sessions\Session;
class SessionsController extends \BaseController {

	/**
	 * Show the login form.
	 * GET /session/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created session in storage.
	 * POST /session
	 *
	 * @return Response
	 */
	public function store()
	{
        $credentials = [
            'identifier' => Input::get('email'),
            'password' => Input::get('password')
        ];
        if(Auth::attempt($credentials)){
			return Redirect::intended('/')->withErrors([0 => "created session"]);
		}
		return Redirect::to('login')->withErrors([0 => "cant create session for some reason"]);
	}

	/**
	 * Remove the specified session from storage.
	 *
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
        return Redirect::home();
	}

}
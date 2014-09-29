<?php

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
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ];
        if(Auth::attempt($credentials)) return Redirect::to('invitations/create');
        dd('problem');
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
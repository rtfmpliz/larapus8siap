<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
protected $layout = 'layouts.master';

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function dashboard()
{
$this->layout->content = View::make('dashboard.index')->withTitle('Dashboard');
}

public function authenticate()
{
// Ambil credentials dari $_POST variable
$credentials = array(
'email' => Input::get('email'),
'password' => Input::get('password'),
);
try {
// authentikasi user
$user = Sentry::authenticate($credentials, false);
// Redirect user ke dashboard
return Redirect::to('dashboard');
} catch (Exception $e) {
// kembalikan user ke halaman sebelumnya (login)
return Redirect::back();
}
}

public function logout()
{
// Logout user
Sentry::logout();
// Redirect user ke halaman login
return Redirect::to('login');
}


}

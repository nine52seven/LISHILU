<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Route;
use Auth;
use Session;
use Request;
use Lang;

class IndexController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// echo Route::currentRouteAction();
		return view('admin.index');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getSignin()
	{
		return view('admin.signin');
	}


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function postSignin()
	{
		$data = Request::all();
        $remember = empty($data['remember']) ? false : true;
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'active' => 1], $remember))
        {
            $user = Auth::user();
            Auth::login( $user );
            return redirect()->intended('admin');
        } else {
            return redirect('admin/signin')->with('message', Lang::get('site.signin_failed'))->withInput(Request::except('password'));
        }
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function signout()
	{
		if (!Auth::guest()) Auth::logout();
        return redirect('admin/signin');
	}


}

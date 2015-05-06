<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserProfileRequest;

use Illuminate\Http\Request;

use Auth;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('dashboard');
	}

    /**
     * 个人资料.
     *
     * @return Response
     */
    public function getProfile()
    {
        return view('user.profile');
    }

     /**
     * 更新个人资料操作.
     *
     * @param  UserProfileRequest  $request
     * @return Response
     */
    public function postProfile(UserProfileRequest $request)
    {
        $input = Request::all();
        dd($input);
    }

}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserSignupRequest;

// use Illuminate\Http\Request;
use Request;
use Auth;
use Redirect;
use Hash;
use Session;
use Lang;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * 登陆.
     *
     * @return Response
     */
    public function getSignin()
    {
        if (!Auth::check()) {
            return view('user.signin');
        } else {
            return redirect()->intended('dashboard');
        }
    }

    // public function postSignin(Request $request)
    public function postSignin()
    {

        $data = Request::all();
        $remember = empty($data['remember']) ? false : true;

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'active' => 1], $remember))
        {
            // Auth::check();
            $user = Auth::user();
            Auth::login( $user );
            //记录登陆日志
            // $loginlog = new Loginlog();
            // $loginlog->user_id = $user->id;
            // $loginlog->ip = Request::getClientIp();
            // $loginlog->created_at = date("Y-m-d H:i:s");
            // $loginlog->user_agent = Request::header('user-agent');
            // $loginlog->save();

            return redirect()->intended('dashboard');
        } else {
            // return Redirect::to('user/signin')->with('message', '登录失败')->withInput(Request::except('password'));
            return redirect('user/signin')->with('message', Lang::get('site.login_failed'))->withInput(Request::except('password'));
            // return Redirect::to('user/signin')->withErrors($validator)->withInput($data);
        }


    }

    /**
     * 注册.
     *
     * @return Response
     */
    public function getSignup()
    {
        //
        // dd(Lang::get('site.Signup'));
        if (!Auth::check()) {
            return view('user.signup');
        } else {
            return redirect()->intended('dashboard');
        }
    }

    /**
     * 注册操作.
     *
     * @param  UserSignupRequest  $request
     * @return Response
     */
    public function postSignup(UserSignupRequest $request)
    {
        // $data = $request->all();

        dd('haha');
        // return view('user.signup');
    }

    /**
     * 登出.
     *
     * @return Response
     */
    public function getSignout()
    {
        Auth::logout();
        return Redirect::to('/');
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

}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserSignupRequest;
use App\Http\Requests\UserSigninRequest;
use App\Http\Requests\UserForgotRequest;
use App\Http\Requests\UserProfileRequest;

// use App\Http\Controllers\Password;

// use Illuminate\Http\Request;
use Request;
use Auth;
use Redirect;
use Hash;
use Session;
use Lang;
use Mail;
use App\User;
use Crypt;
use Password;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        $encrypted = Crypt::encrypt('secret');
        $decrypted = Crypt::decrypt($encrypted);
        echo $encrypted."<br/>";
        echo $decrypted;
        dd('index');
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

    /**
     * 登陆操作.
     *
     * @param  UserSigninRequest  $request
     * @return Response
     */
    public function postSignin(UserSigninRequest $request)
    {

        $data = Request::all();
        $remember = empty($data['remember']) ? false : true;
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'active' => 1], $remember))
        {
            $user = Auth::user();
            Auth::login( $user );
            return redirect()->intended('dashboard');
        } else {
            return redirect('user/signin')->with('message', Lang::get('site.signin_failed'))->withInput(Request::except('password'));
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
        // if (!Auth::check()) {
        //     return view('user.signup');
        // } else {
        //     return redirect()->intended('dashboard');
        // }
        return view('user.signup');
    }

    /**
     * 注册操作.
     *
     * @param  UserSignupRequest  $request
     * @return Response
     */
    public function postSignup(UserSignupRequest $request)
    {
        $user                  = new User;
        $user->username        = Request::input('username');
        $user->email           = Request::input('email');
        $user->password        = Hash::make(Request::input('password'));
        $user->activation_code = Hash::make($user->email.time());
        $user->name            = Request::input('name');

        if ($user->save()) {
            // $data = ['email' => $user->email, 'activation_code' => $user->activation_code];
            // Mail::send('emails.hello', $data, function($message) use($data) {
            //         // $message->from('us@example.com', 'Laravel');
            //         $message->to($data['email'], $data['email'])->subject(Lang::get('site.active_title'));
            //         // $message->attach($pathToFile);
            //     }
            // );
           return redirect('user/signin')->with('message', Lang::get('site.signup_success'));
        } else {
           return redirect('user/signup')->with('message', Lang::get('site.signup_failed'))->withInput();
        }
    }

    /**
     * 登出.
     *
     * @return Response
     */
    public function getSignout()
    {
        if (!Auth::guest()) Auth::logout();
        return Redirect::to('/');
    }

    /**
     * 激活.
     *
     * @return Response
     */
    public function getActive()
    {
        $activation_code = Request::input('code');
        $user = User::whereActivationCode($activation_code)->first();
        if (!$user) {
            return redirect('/');
        }

        $user->active = 1;
        $user->activation_code = null;
        $user->actived_at = date('Y-m-d H:i:s');
        $user->save();
        return redirect('user/signin')->with('message', Lang::get('site.active_ok'));
    }

    /**
     * 忘记密码.
     *
     * @return Response
     */
    public function getForgot()
    {
        return view('user.forgot');
    }

    /**
     * 忘记密码操作.
     *
     * @param  UserForgotRequest  $request
     * @return Response
     */
    public function postForgot(UserForgotRequest $request)
    {
        // 调用系统提供的类
        $response = Password::sendResetLink(['email' => Request::input('email')], function ($m, $user, $token) {
            $m->subject(Lang::get('passwords.subject')); // 标题
        });

        switch ($response) {
            case Password::INVALID_USER:
                return Redirect::back()->with('message', Lang::get($response));
            case Password::RESET_LINK_SENT:
                return Redirect::back()->with('message', Lang::get($response));
        }

    }

    /**
     * 重设密码.
     *
     * @return Response
     */
    public function getReset()
    {
        $token = Request::input('token');
        if (is_null($token)) abort(404);

        return view('user.reset')->with('token', $token);
    }

    /**
     * 重设密码操作.
     *
     * @param  UserProfileRequest  $request
     * @return Response
     */
    public function postReset(UserResetRequest $request)
    {
        $credentials = Request::only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $response = Password::reset($credentials, function($user, $password)
        {
            $user->password = Hash::make($password);
            $user->save();
            //重置完直接登陆
            Auth::login( $user );
        });

        switch ($response)
        {
            case Password::INVALID_PASSWORD:
            case Password::INVALID_TOKEN:
            case Password::INVALID_USER:
                return Redirect::back()->with('error', Lang::get($response));

            case Password::PASSWORD_RESET:
                return redirect()->intended('dashboard');
                // return Redirect::to('/');
        }
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
        $input = $request->all();
        // dd($input);
        $user = Auth::user();
        $user->name = $input['name'];
        $user->sex = $input['sex'];
        $user->mobile = $input['mobile'];
        $user->tel = $input['tel'];
        if ($user->save()) {
            return redirect('user/profile')->with('message', Lang::get('site.do_ok'));
        }

    }

}

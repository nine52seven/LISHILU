<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ($this->auth->guest())
		{
			if ($request->ajax())
			{
				return abort(401);
			}
			else
			{
				return redirect()->guest('user/signin');
			}
		}
		//如果不是客户账号,返回401
		$roles = explode(",", $this->auth->user()->role);
		if (count(array_intersect($roles, ['com_m', 'com_u'])) <= 0) {
			return abort(401);
		}

		return $next($request);
	}

}

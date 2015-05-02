<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Auth;
use View;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//共享登陆用户信息
		// if (Auth::check()) {
	 //        $this->currentUser = Auth::User();
	 //        view()->share([ 'currentUser' => $this->currentUser ]);
	 //    }

	    View::composer('*', function($view){
	        $view->with('currentUser', Auth::user());
	    });
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}

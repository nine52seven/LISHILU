<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::when('*', 'csrf', array('post', 'put', 'delete'));

Route::get('/', 'IndexController@index');

Route::controller('user', 'UserController');

//登陆
// Route::get('user/signin', 'UserController@signin');
// Route::post('user/signin', 'UserController@postSignin');
//注册
// Route::get('user/signup', 'UserController@signup');
//退出
// Route::get('user/signout', 'UserController@signout');

Route::get('dashboard', 'DashboardController@signout');

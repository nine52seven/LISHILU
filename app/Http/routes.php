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


// 前台登录认证
Route::filter('auth', function()
{
    if( !Auth::check() )
    {
        return Redirect::to('user/signin');
    }
});

// Route::when('*', 'csrf', array('post', 'put', 'delete'));

//未登录可以访问页面
Route::get('/', 'IndexController@index');
Route::get('home', 'IndexController@home');
Route::get('about', 'IndexController@about');
Route::get('contact', 'IndexController@contact');

//登陆,注册,退出
Route::controller('user', 'UserController');

//需要登录访问页面
Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', 'DashboardController@index');
    Route::get('staff', 'StaffController@index');
});

#对后台开启csrf过滤
// Route::when('admin/*', 'csrf', ['post','delete','put']);


// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
//     Route::get('user', function() {
//         // blablabla...
//     });
//     Route::get('article', function() {
//         // blablabla...
//     });
// });


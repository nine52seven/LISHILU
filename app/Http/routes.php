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

//未登录可以访问页面
Route::get('/', 'IndexController@index');
Route::get('home', 'IndexController@home');
Route::get('about', 'IndexController@about');
Route::get('contact', 'IndexController@contact');


//需要登录访问页面
Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', 'DashboardController@index');
    Route::get("user/profile", "UserController@getProfile");
    Route::post("user/profile", "UserController@postProfile");
    Route::get("user/changepwd", "UserController@getChangepwd");
    Route::post("user/changepwd", "UserController@postChangepwd");

    // Route::group(['prefix' => 'staff'], function() {
    //     Route::get('/', 'StaffController@index');
    //     Route::get('create', 'StaffController@create');
    // });
    Route::resource('staff', 'StaffController');


});

//登陆,注册,退出
Route::controller('user', 'UserController');

//后台管理
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('signin', 'IndexController@getSignin');
    Route::post('signin', 'IndexController@postSignin');
    Route::get('signout', 'IndexController@signout');

    Route::group(['middleware' => 'adminAuth'], function(){
        Route::get('/', 'IndexController@index');
        // Route::get('users', 'UsersController@index');
        // Route::get('users/show/{id}', 'UsersController@show');
        Route::resource('users', 'UsersController');
    });
});


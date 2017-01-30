<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/welcome',[function(){return view('dashboard.master');}]);
Route::group(['middleware' => 'web'], function(){
	Route::post('/register',['as' => 'register', 'uses' => 'RegistrationController@register']);
	Route::get('/login_test',
		[
			'middleware'=> 'auth', 
			'as' => 'login_path', 
			'uses' => 'RegistrationController@hello'
		]);
	Route::get('register/verify/{login_id}/{confirmation_code}', [
	    'as' => 'confirmation_path',
	    'uses' => 'RegistrationController@confirm'
	]);
  //Route::post('/signin',['as' => 'signin', 'uses' => 'UserController@postSignIn']);
  //Route::get('/dashboard',['as' => 'dashboard', 'uses' => 'UserController@getDashboard', 'middleware' => 'auth']);
});

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
    return view('auth.login');
});

//Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'web'], function(){

	/* User Register Route */
	Route::get('/register', function () {
    	return view('auth.register');
	});
	Route::post('/register',['as' => 'register', 'uses' => 'RegistrationController@register']);
	Route::get('register/verify/{login_id}/{confirmation_code}', [
	    'as' => 'confirmation_path',
	    'uses' => 'RegistrationController@confirm'
	]);
	/* User Login Route */
	Route::get('/login',['as' => 'login', function(){
		return view('auth.login');
	}]);
	Route::post('/login',['as' => 'login', 'uses' => 'UserLoginController@traineeLogin']);

  	Route::group(['middleware' => 'auth'], function(){
  		

		/* User Login Route */
		Route::get('/update_profile',['as' => 'update_profile', function(){
			return view('auth.update_profile');
		}]);
		Route::post('/update_profile',['as' => 'update_profile', 'uses' => 'TraineeController@profileUpdate']);
		Route::get('/educations_experience_skills',['as' => 'edu_exp_skills', function(){
			return view('auth.edu_exp_skills');
		}]);
		Route::post('/educations_experience_skills',['as' => 'edu_exp_skills', 'uses' => 'TraineeController@saveLevelEducation']);
		/* User Dashboard Route */
		//Route::get('/welcome',['as' => 'welcome', function(){return view('dashboard.master');}]);
		Route::get('/test', function(){

	    	//$user = Auth::user();
	    	//$trainee = $user->trainee;
	    	dd(Auth::user()->login_id);
		});
	  	Route::get('/dashboard',['as' => 'dashboard', function(){
	  		return view('dashboard.dashboard');
	  	}]);
	  	Route::get('/logout', function(){
	  		Session::flush ();
	        Auth::logout ();
	        return redirect('/');
	  	});
  	});
});

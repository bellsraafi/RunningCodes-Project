<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Auth;
use App\User;

class UserLoginController extends Controller
{
	 /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected  $messages = [
            'login_id.exists' => "The Login ID you've entered doesn't match any of our record.",
            'login_id.regex' => "The Login ID you've entered is of incorrect format"
    ];
    public function traineeLogin(Request $request)
    {
    	$request['login_id'] = strtolower($request['login_id']);
    	//dd($request->all());
    	//exit();
        $rules = [
            'login_id' => 'required|exists:users|regex:/(odit)([\d]{5})$/',
            'password' => 'required'
        ];
    

        $validator = \Validator::make($request->only('login_id', 'password'), $rules);

       if($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }

       $credentials = [
            'login_id' => $request['login_id'],
            'password' => $request['password'],
            'confirmed' => 1
        ];

        if ( ! \Auth::attempt($credentials))
        {
        	session()->flash('credentials', 'We were unable to sign you in.');
            return redirect()
                ->back()
                ->withErrors([
                    'credentials' => 'We were unable to sign you in.'
                ])
                ->withInput();
        }
        $login_id = strtolower(Auth::user()->login_id);
        if(Auth::user()->isTrainee($login_id)){
            return redirect()->intended('dashboard');
        }elseif(Auth::user()->isBenefactor($login_id)){
            dd(Auth::user()->login_id);
        }elseif(Auth::user()->isAdmin($login_id)){
            dd(Auth::user()->login_id);
        }
        
        return redirect('/logout');
        
       //dd(Auth::user());
    }
    public function getLockScreen(){
    
    // only if user is logged in
        if(Auth::check()){
            \Session::put('locked', true);

            return view('locked');
        }

        return redirect('/login');
    }

    public function postLockScreen()
    {
    // if user in not logged in 
        if(!\Auth::check())
            return redirect('/login');

        $password = \Input::get('password');

        if(\Hash::check($password,\Auth::user()->password)){
            \Session::forget('locked');
            return redirect('/dashboard');
        }
        
    }
    public function logout() {
        Session::flush ();
        Auth::logout ();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
//use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;
//use Carbon\Carbon;
use App\Http\Controllers\UniversalController;
use App\User;
use App\Trainee;
use App\Benefactor;

class RegistrationController extends Controller
{
	use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()

    {
        //$this->middleware('auth', ['only']);
        //$this->middleware('guest');
    }
	protected $mailer;
    protected $trainee;
    protected $user;
	protected $traineeID;

    public function register(Request $request){
    	$user_type = $request['user_type'];
    	if ($user_type == 'trainee') {
    		return $this->registerTrainee($request);
    	}elseif ($user_type == 'benefactor') {
    		return $this->registerBenefactor($request);
    	}
    }

    public function registerTrainee($request){

    	$rules = [
            'fname' => 'required|alpha|min:3',
            'lname' => 'required|alpha|min:3',
            'email' => 'required|email|unique:users',
            'dob' => 'required|date',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required'
        ];

        
        $validator = $this->validate($request, $rules);
       
		$uCon = new UniversalController();
    	$this->traineeID  = $uCon->traineeIDGen(5);

        $confirmation_code = str_random(30);

        //Insert into trainees table for profile
		$this->trainee = new Trainee();
		$this->trainee->first_name = $request['fname'];
		$this->trainee->last_name = $request['lname'];
		$this->trainee->trainee_id = $this->traineeID;
		$this->trainee->email = $request['email'];
		$this->trainee->dob = date("Y-m-d",strtotime(str_replace('/','-',$request['dob'])));

        $this->trainee->save();

        //Insert Into users table for login
        $this->user = new User();
        $this->user->login_id = $this->traineeID;
        $this->user->email = $request['email'];
		$this->user->password = bcrypt($request['password']);
		$this->user->confirmation_code = $confirmation_code;

        $this->user->save();

        \Mail::send(
        	'email.verify', 
        	['c_code' => $this->user->confirmation_code,'login_id' => $this->traineeID], 
        	function($message) {
            	$message->to($this->user->email, $this->traineeID)
                ->subject('Confirm Your Account');
        	}
        );

        session()->flash('msg', 'Thanks for registering with RunningCodes Project!
             Your Login ID and a link to your account has been sent to your email.');

        return redirect()->route('login');
    }
    public function registerBenefactor($request){
    	return 1;
    }

    /* Verify User Registration
    */
    public function confirm($login_id, $confirmation_code)
    {
        $login_id = strtolower($login_id);
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }
        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        //\Auth::login($user);
        session()->flash('login_message', 'Your account has been activated successfully. Login to continue');
        return redirect()->route('update_profile');
        
        session()->flash('msg', 'You have successfully verified your account. Please kindly ');

        return redirect()->route('update_profile');
    }

    public function hello()
    {
        return 'Welcome';
    }
}

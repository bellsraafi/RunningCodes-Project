<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
//use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;
//use Carbon\Carbon;
use App\Http\Controllers\UniversalController;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
	protected $mailer;
	protected $trainee;

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
            'email' => 'required|email|unique:trainees',
            'dob' => 'required|date',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required'
        ];

        
        $validator = $this->validate($request, $rules);
       
		$uCon = new UniversalController();
    	$traineeID  = $uCon->traineeIDGen(5);

        $confirmation_code = str_random(30);

		$this->trainee = new Trainee();
		$this->trainee->first_name = $request['fname'];
		$this->trainee->last_name = $request['lname'];
		$this->trainee->trainee_id = $traineeID;
		$this->trainee->email = $request['email'];
		$this->trainee->dob = date("Y-m-d",strtotime(str_replace('/','-',$request['dob'])));
		$this->trainee->password = bcrypt($request['password']);
		$this->trainee->confirmation_code = $confirmation_code;

		$this->trainee->save();

        \Mail::send(
        	'email.verify', 
        	['c_code' => $this->trainee->confirmation_code,'login_id' => $this->trainee->trainee_id], 
        	function($message) {
            	$message->to($this->trainee->email, $this->trainee->trainee_id)
                ->subject('Verify your email address');
        	}
        );

        //Flash::message('Thanks for registering with RunningCodes Project!
        	//<bre>Kindly check your email for confirmation.');

        return 'Verify your mail';
    }
    public function registerBenefactor($request){
    	return 1;
    }

    /* Verify User Registration
    */
    public function confirm($login_id, $confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }
        if(preg_match("/(ODIT)([\d]{5})$/", $login_id)){
            $user = Trainee::whereConfirmationCode($confirmation_code)->first();

            if ( ! $user)
            {
                throw new InvalidConfirmationCodeException;
            }

            $user->confirmed = 1;
            $user->confirmation_code = null;
            $user->save();
        }
         if(preg_match("/(ODIB)([\d]{5})$/", $login_id)){
            $user = Benefactor::whereConfirmationCode($confirmation_code)->first();

            if ( ! $user)
            {
                throw new InvalidConfirmationCodeException;
            }

            $user->confirmed = 1;
            $user->confirmation_code = null;
            $user->save();
        }

        

        //Flash::message('You have successfully verified your account.');

        return redirect()->url('/welcome');
    }

    public function hello()
    {
        return 'Welcome';
    }
}

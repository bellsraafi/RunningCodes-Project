<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Auth;
use App\Trainee;

class TraineeController extends Controller
{
    protected $trainee = '';

    public function messages()
	{
	    return [
	        'stateid.exists' => 'Select a valid State from the option provided'
	    ];
	}

    public function profileUpdate(Request $request)
    {
    	$rules = [
            'username' => 'required|min:3|max:20|alphaNum',
            'gender' => ['required', 'regex' => '/(male|female)$/'],
            'stateid' => 'required|exists:states',
            'ppic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    	$user = \Auth::user();
    	$trainee = $user->trainee;
    	//$user_id = $user->getLoginId();
    	$ppic = $request->file('ppic');
    	
		if( $request->hasFile('ppic') ) {
    		$request['ppic_name'] = $user->login_id.'.'.$ppic->getClientOriginalExtension();
    		$destinationPath = public_path('/images/profile_pics');
    		$ppic->move($destinationPath, $request['ppic_name']);
    	}
    	$trainee->username = $request['username'];
    	$trainee->gender = $request['gender'];
    	$trainee->stateid = $request['stateid'];
    	$trainee->profile_pic = $request['ppic_name'];

    	$trainee->save();

    	return redirect()->route('edu_exp_skills');

    	//dd($request['stateid']);

    	
    }

    public function saveLevelEducation(Request $request)
    {
    	dd($request->all());

    	$rules = [
    		'p_skul_name' => 'required|alpha|min:10',
    		'p_skul_name_from' => 'required|num',
    		'p_skul_name_to' => 'required|alpha|min:10',
    		's_skul_name' => 'required|alpha|min:10',
    		's_skul_name_from' => 'required|alpha|min:10',
    		's_skul_name_to' => 'required|alpha|min:10',
    		't_skul_name' => 'required|alpha|min:10',
    		't_skul_name_from' => 'required|alpha|min:10',
    		't_cos_study' => 'required|alpha|min:10',
    		't_cos_levle' => 'required|alpha|min:10',
    		't_skul_name_to' => 'required|alpha|min:10'
    	];

    }
/*
    public function uploadProfilePic(Request $request)
    {
        $this->validate($request, [
        ]);
        $image = $request->file('image');
        $path = $request->photo->path();

		$extension = $request->photo->extension();

        $input['imagename'] = $this->trainee->trainee_id.'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/images/profile_pics');

        $image->move($destinationPath, $input['imagename']);
        $this->postImage->add($input);

        return back()->with('success','Image Upload successful');

    }
    */
}

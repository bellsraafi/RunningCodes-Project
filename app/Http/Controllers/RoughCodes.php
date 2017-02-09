<?php 

//Start Dashboard Codes

// ROUTES.php
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', function() {
        if($this->user->isAdmin())
            return redirect('/dashboard/admin');
        if($this->user->isManager())
            return redirect('/dashboard/manager');

        return redirect('/home');
    });

    Route::get('dashboard/admin', 'Admin\dashboard@index');
    Route::get('dashboard/manage', 'Manager\dashboard@index');
    Route::get('users', 'PagesController@manageUsers');
});
//End Dashboard Codes

/*
<li>{{ HTML::route('profile', 'Profile' ) }}</li>
<li>{{ HTML::route('logout', 'Logout (' . Auth::user()->username . ')') }}</li>
 */


//Add the following code in auth middleware to implement lockscreen feature.
 /*if(\Session::get('locked') === true)
            return redirect('/lockscreen');    */               
 ?>

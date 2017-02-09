<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public $incrementing = false;
    protected $primaryKey = 'login_id';

    public function getLoginId()
    {
      return $this->login_id;
    }

    public function trainee(){
        return $this->hasOne('App\Trainee', 'trainee_id');
    }

    public function benefactor(){
        return $this->hasOne('App\Benefactor', 'benefactor_id');
    }

    public function admin(){
        return $this->hasOne('App\Admin', 'admin_id');
    }

    public function isTrainee($login_id)
    {
        if (preg_match("/(odit)([\d]{5})$/", $login_id)) {
            return true;
        }
    }

    public function isBenefactor($login_id)
    {
        if (preg_match("/(odib)([\d]{5})$/", $login_id)) {
            return true;
        }
    }
    public function isAdmin($login_id)
    {
        if (preg_match("/(admin)([\d]{3})$/", $login_id)) {
            return true;
        }
    }
}

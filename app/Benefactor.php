<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefactor extends Model
{
    //
    protected $primaryKey = 'benefactor_id';
    public function user(){
    	return $this->belongsTo('App\User');
    }
}

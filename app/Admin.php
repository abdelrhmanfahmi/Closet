<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
use Illuminate\Notifications\Notifiable;
//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    
    protected $table = 'admin';
    protected $primaryKey = 'admin_id';
    protected $fillable = ['username' , 'password'];
    public $timestamps  = false;

    public function hasbrands(){
    	return $this->hasMany('App\Brand' , 'admin_id' , 'admin_id');
    }

    public function hascustomers(){
    	return $this->hasMany('App\Customer' , 'admin_id' , 'admin_id');
    }
}

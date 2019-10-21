<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';
    protected $primaryKey = 'phone_id';
    protected $fillable = ['phone'];
    public $timestamps = false;

    public function customerPhone(){
    	return $this->hasMany('App\Customer' , 'phone_id' , 'phone_id');
    }
    public function brandPhone(){
    	return $this->hasMany('App\Brand' , 'phone_id' , 'phone_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'gender';
    protected $primaryKey = 'gender_id';
    protected $fillable = ['gender_name'];

    public $timestamps = false;

    public function genderCustomer(){
    	return $this->hasMany('App\Customer' , 'gender_id' , 'gender_id');
    }
}

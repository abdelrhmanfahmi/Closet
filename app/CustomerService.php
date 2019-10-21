<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerService extends Model
{
    protected $table = 'customer_service';
    protected $fillable = ['username' , 'password'];
    protected $primaryKey = 'customerService_id';

    public $timestamps = false;

    public function CustomerServiceChat(){
    	return $this->hasMany('App\Chat' , 'customerService_id' , 'customerService_id');
    }

}

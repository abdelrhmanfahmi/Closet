<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    protected $primaryKey = 'payment_id';
    protected $fillable = ['payment_name'];

    public $timestamps = false;

    public function PaymentOrder(){
    	return $this->hasMany('App\Order' , 'payment_id' , 'payment_id');
    }
    public function PaymentTransaction(){
    	return $this->hasMany('App\Transaction' , 'payment_id' , 'payment_id');
    }

}

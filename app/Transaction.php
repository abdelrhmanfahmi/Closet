<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	protected $table = 'transaction';
	protected $primaryKey = 'transaction_id';
	protected $fillable = ['bank' , 'delivery' , 'brand' , 'closet' , 'order_id' , 'payment_id' , 'bank_status' , 'delivery_status' , 'brand_status'];
	public $timestamps = false;

    public function TransactionOrder(){
    	return $this->belongsTo('App\Order');
    }
    public function TransactionPayment(){
    	return $this->belongsTo('App\Payment');
    }
}

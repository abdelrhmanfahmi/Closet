<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $fillable = ['total_price' , 'placed' , 'date' , 'customer_id' , 'payment_id'];

    public $timestamps = false;

    public function orderPayment(){
    	return $this->belongsTo('App\Payment');
    }
    public function orderCustomer(){
    	return $this->belongsTo('App\Customer');
    }
    public function Orderprodorder(){
        return $this->hasMany('App\ProdOrder' , 'order_id' , 'order_id');
    }
    public function OrderTransaction(){
        return $this->hasMany('App\Transaction' , 'order_id' , 'order_id');
    }
    public function OrderDelivery(){
        return $this->hasMany('App\Delivery' , 'order_id' , 'order_id');
    }
    public function orderDeliveryRate(){
        return $this->hasMany('App\DeliveryRate' , 'order_id' , 'order_id');
    }
    public function OrderdeliveryImage(){
        return $this->hasMany('App\DeliveryImage' , 'order_id' , 'order_id');
    }
}

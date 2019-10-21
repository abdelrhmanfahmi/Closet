<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryRate extends Model
{
    protected $table = 'delievery_rate';
    protected $primaryKey = 'deliveryRate_id';
    protected $fillable = ['customer_id' , 'order_id' , 'rate'];

    public $timestamps = false;

    public function deliveryRateCustomer(){
    	return $this->belongsTo('App\Customer');
    }
    public function deliveryRateOrder(){
    	return $this->belongsTo('App\Order');
    }
}

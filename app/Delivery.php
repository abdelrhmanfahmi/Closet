<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'delivery';
    protected $primaryKey = 'delivery_id';
    protected $fillable = ['order_id'];
    public $timestamps = false;

    public function DeliveryOrder(){
    	return $this->belongsTo('App\Order');
    }
}

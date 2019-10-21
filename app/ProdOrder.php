<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdOrder extends Model
{
	protected $table = 'prodorder';
	protected $fillable = ['order_id' , 'product_id'];
	public $timestamps = false;

    public function prodorderOrder(){
    	return $this->belongsTo('App\Order');
    }
    public function prodorderProduct(){
    	return $this->belongsTo('App\Product');
    }
}

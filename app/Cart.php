<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $fillable = ['product_id'];
    protected $primaryKey = 'cart_id';

    public $timestamps = false;

    public function cartProduct(){
    	return $this->hasMany('App\Product' , 'cart_id' , 'cart_id');
    }
    public function cartCustomer(){
    	return $this->belongsTo('App\Customer');
    }

}

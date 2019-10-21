<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $table = 'favourite';
    protected $fillable = ['customer_id' , 'product_id'];
    public $timestamps  = false;

    public function favouriteCustomer(){
    	return $this->hasMany('App\Customer' , 'customer_id' , 'customer_id');
    }
    public function favouriteProduct(){
    	return $this->hasMany('App\Product' , 'product_id' , 'product_id');
    }
}

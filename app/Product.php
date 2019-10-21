<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $fillable = ['product_name' , 'available' , 'discount' , 'customer_id' , 'image_id' , 'brand_id'];
    public $timestamps  = false;

    public function productCustomer(){
    	return $this->belongsTo('App\Customer');
    }
    public function productBrand(){
    	return $this->belongsTo('App\Brand');
    }
    public function productFavourite(){
        return $this->belongsTo('App\Favourite');
    }
    public function productDescription(){
        return $this->hasMany('App\Description' , 'product_id' , 'product_id');
    }
    public function Productprodorder(){
        return $this->hasMany('App\ProdOrder' , 'product_id' , 'product_id');
    }
    public function productSubCategory(){
        return $this->belongsTo('App\sub_category');
    }
    public function productCart(){
        return $this->belongsTo('App\Cart');
    }
}

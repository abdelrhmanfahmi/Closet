<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $table = 'description';
    protected $fillable = ['color' , 'size' , 'material' , 'hot_deals' , 'price' , 'category_id' , 'sub_category_id' , 'product_id' , 'brand_name'];
    protected $primaryKey = 'description_id';

    public $timestamps = false;

    public function descriptionProduct(){
    	return $this->belongsTo('App\Product');
    }
    public function descriptionCategory(){
    	return $this->belongsTo('App\Category');
    }
    public function descriptionSub_Category(){
    	return $this->belongsTo('App\Sub_Category');
    }

}

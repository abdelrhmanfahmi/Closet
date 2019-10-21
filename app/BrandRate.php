<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandRate extends Model
{
    protected $table = 'brandrate';
    protected $primaryKey = 'rate_id';
    protected $fillable = ['customer_id' , 'brand_id' , 'rate'];

    public $timestamps = false

    public function BrandRateCustomer(){
    	return $this->belongsTo('App\Customer');
    }
    public function BrandRateBrand(){
    	return $this->belongsTo('App\Brand');
    }
}

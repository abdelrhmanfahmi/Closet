<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
	protected $table = 'brand';
	protected $primaryKey = 'brand_id';
	protected $fillable = ['name' , 'email' , 'location' , 'phone_id' , 'admin_id' , 'image_id'];
	public $timestamps  = false;

	public function adminsBrands(){
		return $this->belongsTo('App\Admin');
	}

	public function brandProducts(){
		return $this->hasMany('App\Product' , 'brand_id' , 'brand_id');
	}
	public function brandPhone(){
		return $this->belongsTo('App\Phone');	
	}
	public function brandBrandrate(){
		return $this->hasMany('App\BrandRate' , 'brand_id' , 'brand_id');
	}
}

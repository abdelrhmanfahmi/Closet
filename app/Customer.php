<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
	protected $primaryKey = 'customer_id';
	protected $fillable = ['Full_name' , 'user_name' , 'password' , 'email' , 'address' , 'phone_id' , 'Data_Of_Birth' , 'gender_id' , 'admin_id'];
	public $timestamps  = false;

	public function adminsCustomer(){
		return $this->belongsTo('App\Admin');
	}

	public function customerProducts(){
		return $this->hasMany('App\Product' , 'customer_id' , 'customer_id');
	}

	public function customerFavourite(){
		return $this->belongsTo('App\Favourite');
	}
	public function customerPhone(){
		return $this->belongsTo('App\Phone');
	}
	public function customerGender(){
		return $this->belongsTo('App\Gender');
	}
	public function customerOrder(){
		return $this->hasMany('App\Order' , 'customer_id' , 'customer_id');
	}
	public function customerDeliveryRate(){
		return $this->hasMany('App\DeliveryRate' , 'customer_id' , 'customer_id');
	}
	public function customerBrandrate(){
		return $this->hasMany('App\BrandRate' , 'customer_id' , 'customer_id');
	}
	public function customerChat(){
		return $this->hasMany('App\Chat' , 'customer_id' , 'customer_id');
	}
	public function customerCart(){
		return $this->hasOne('App\Cart');
	}
	public function CustomerApiKey(){
		return $this->belongsTo('App\KeyApi');
	}
	public function CustomerHistory(){
		return $this->hasMany('App\History' , 'customer_id' , 'customer_id');
	}
}

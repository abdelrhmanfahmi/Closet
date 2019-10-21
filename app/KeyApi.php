<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeyApi extends Model
{
    protected $table = 'apikey';
	protected $primaryKey = 'key_id';
	protected $fillable = ['api_key'];
	public $timestamps  = false;

	public function ApiKeyCustomer(){
		return $this->hasMany('App\Customer' , 'api_key' , 'key_id');
	}
}

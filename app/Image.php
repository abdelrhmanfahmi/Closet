<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'image_id';
    protected $fillable = ['image'];
    public $timestamps = false;

    public function imageBrand(){
    	return $this->hasMany('App\Brand' , 'image_id' , 'image_id');
    }
    public function imageProduct(){
    	return $this->hasMany('App\Product' , 'image_id' , 'image_id');
    }
}

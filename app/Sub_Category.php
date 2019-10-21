<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    protected $table = 'sub_category';
    protected $primaryKey = 'subcategory_id';
    protected $fillable = ['name'];

    public $timestamps = false;

    public function sub_categorydescription(){
    	return $this->hasMany('App\Description' , 'sub_category_id' , 'subcategory_id');
    }
    public function sub_categoryProduct(){
    	return $this->hasMany('App\Product' , 'subcategory_id' , 'subcategory_id');
    }
}

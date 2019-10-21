<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['category_name'];
    protected $primaryKey = 'category_id';

    public $timestamps = false;

    public function categoryDescription(){
    	return $this->hasMany('App\Description' , 'category_id' , 'category_id');	
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryImage extends Model
{
    protected $table = 'deliveyimages';
    protected $primaryKey = 'image_id';
    protected $fillable = ['image' , 'order_id'];

    public $timestamps = false;

    public function DeliveryImageOrder(){
    	return $this->belongsTo('App\Order');
    }
}

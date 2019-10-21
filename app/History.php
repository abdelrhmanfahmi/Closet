<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $fillable = ['string' , 'customer_id'];
    protected $primaryKey = 'history_id';

    public $timestamps = false;

    public function HistoryCustomer(){
    	return $this->belongsTo('App\Customer');
    }
}

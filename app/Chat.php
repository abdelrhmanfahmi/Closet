<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chats';
    protected $primaryKey = 'chat_id';
    protected $fillable = ['customer_id' , 'customerService_id'];

    public $timestamps = false;

    public function ChatCustomer(){
    	return $this->belongsTo('App\Customer');
    }
    public function ChatCustomerService(){
    	return $this->belongsTo('App\CustomerService');
    }
    public function ChatMessages(){
    	return $this->hasMany('App\Message' , 'chat_id' , 'chat_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'messages_id';
    protected $fillable = ['content' , 'type' , 'chat_id' , 'date'];

    public $timestamps = false;

    public function messageChat(){
    	return $this->belongsTo('App\Chat');
    }
}

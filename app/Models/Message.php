<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model 
{
    use HasFactory;
    protected $table = 'messages';
    public $timestamps = true;
    protected $fillable = array('chat_id', 'body', 'image');

    public function chat()
    {
        return $this->belongsTo('App\Models\Chat');
    }

    public function sender()
    {
        return $this->morphTo();
    }

}
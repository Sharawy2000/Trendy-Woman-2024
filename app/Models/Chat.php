<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model 
{
    use HasFactory;
    protected $table = 'chats';
    public $timestamps = true;
    protected $fillable = array('user_id', 'admin_id');

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }

}
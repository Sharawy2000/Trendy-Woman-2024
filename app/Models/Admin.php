<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model 
{
    use HasFactory;
    protected $table = 'admins';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'password');

    public function chats()
    {
        return $this->hasMany('App\Models\Chat');
    }

    public function messages()
    {
        return $this->morphMany('App\Models\Message', 'sender');
    }

    public function otps()
    {
        return $this->morphMany('App\Models\User', 'modelable');
    }

}
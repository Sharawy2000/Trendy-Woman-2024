<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model 
{
    use HasFactory;
    protected $table = 'subscriptions';
    public $timestamps = true;
    protected $fillable = array('email');

    public function customer()
    {
        return $this->belongsTo('App\Models\User');
    }

}
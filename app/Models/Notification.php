<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model 
{
    use HasFactory;
    protected $table = 'notifications';
    public $timestamps = true;
    protected $fillable = array('title', 'description', 'is_seen');

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
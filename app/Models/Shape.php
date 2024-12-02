<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shape extends Model 
{
    use HasFactory;
    protected $table = 'shapes';
    public $timestamps = true;
    protected $fillable = array('name', 'image');

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

}
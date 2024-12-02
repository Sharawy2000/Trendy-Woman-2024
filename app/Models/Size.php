<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model 
{
    use HasFactory;
    protected $table = 'sizes';
    public $timestamps = true;

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

}
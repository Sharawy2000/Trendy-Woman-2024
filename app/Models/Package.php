<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model 
{
    use HasFactory;
    protected $table = 'packages';
    public $timestamps = true;
    protected $fillable = array('name', 'description', 'price');

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

}
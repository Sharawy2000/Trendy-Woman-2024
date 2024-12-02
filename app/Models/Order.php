<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model 
{
    use HasFactory;
    protected $table = 'orders';
    public $timestamps = true;
    protected $fillable = array('user_id', 'name', 'phone', 'age', 'size_id', 'shape_id', 'gender', 'occasion', 'occasion_date', 'budget', 'status', 'cancel_reason', 'rate', 'package_id');

    public function size()
    {
        return $this->belongsTo('App\Models\Size');
    }

    public function shape()
    {
        return $this->belongsTo('App\Models\Shape');
    }

    public function package()
    {
        return $this->belongsTo('App\Models\Package');
    }

    public function images()
    {
        return $this->hasMany('App\Models\OrderImage');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
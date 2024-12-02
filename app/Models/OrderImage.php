<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderImage extends Model 
{
    use HasFactory;
    protected $table = 'orderImages';
    public $timestamps = true;
    protected $fillable = array('order_id', 'image');

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTP extends Model 
{
    use HasFactory;
    protected $table = 'otps';
    public $timestamps = true;
    protected $fillable = array('phone', 'email', 'model_id', 'model_type', 'type');

    public function modelable()
    {
        return $this->morphTo();
    }

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurService extends Model 
{
    use HasFactory;
    protected $table = 'our_services';
    public $timestamps = true;
    protected $fillable = array('title', 'image');

}
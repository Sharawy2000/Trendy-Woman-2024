<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model 
{
    use HasFactory;
    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array('key', 'value');

}
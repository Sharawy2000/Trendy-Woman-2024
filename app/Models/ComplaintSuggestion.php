<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintSuggestion extends Model 
{
    use HasFactory;
    protected $table = 'complaint_suggestions';
    public $timestamps = true;
    protected $fillable = array('name', 'body');

    public function customer()
    {
        return $this->belongsTo('App\Models\User');
    }

}
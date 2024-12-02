<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('name', 'phone', 'email', 'is_blocked', 'is_active', 'image', 'deleted_at');

    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function notifications()
    {
        return $this->hasMany('App\Models\Notification');
    }
    
    public function chats()
    {
        return $this->hasMany('App\Models\Chat');
    }
    
    public function messages()
    {
        return $this->morphMany('App\Models\Message', 'sender');
    }
    
    public function otps()
    {
        return $this->morphMany('App\Models\OTP', 'modelable');
    }
    
    public function subscription()
    {
        return $this->hasOne('App\Models\Subscription');
    }
    
    public function complaintSuggesstions()
    {
        return $this->hasMany('App\Models\ComplaintSuggestion');
    }
    
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}

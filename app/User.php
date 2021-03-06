<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    private const ADMIN = "admin";
    
    protected $fillable = [
        'name', 'email', 'password', 'type', 'number'
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    

    public function isAdmin()
    {     
        return $this->type === self::ADMIN;    
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

}

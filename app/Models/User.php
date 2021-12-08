<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Unhidden assigned attributes.
    protected $fillable = [

        'email',
        'password',
    ];

    // Hidden assigned attributes.
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casted assigned attributes.
    protected $casts = [
       // 'email_verified_at' => 'datetime',
    ];
}

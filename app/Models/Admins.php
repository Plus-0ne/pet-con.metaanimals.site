<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admins extends Authenticatable
{
    use HasFactory;

    protected $table='admins';

    protected $fillable = [
        'uuid',
        'last_name',
        'first_name',
        'middle_name',
        'email_address',
        'password',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}

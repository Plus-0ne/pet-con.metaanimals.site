<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Attendees extends Authenticatable
{
    use HasFactory;

    protected $table='attendees';

    protected $fillable = [
        'uuid',
        'name',
        'iagd_number',
        'walk_in',
        'created_by',
        'created_at',
        'updated_at'
    ];
}

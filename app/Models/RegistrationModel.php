<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class RegistrationModel extends Authenticatable
{
    use HasFactory;

    protected $table='registrations';

    protected $fillable = [
        'uuid',
        'token_access',
        'first_name',
        'last_name',
        'middle_name',
        'job_title',
        'email_address',
        'contact_number',
        'password',
        'created_at',
        'updated_at'
    ];
}

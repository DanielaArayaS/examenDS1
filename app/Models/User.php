<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens; // si usarás API

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'rut',
        'nombre',
        'apellido',
        'email',
        'password',
    ];

    // Campos que deben ocultarse cuando se convierte a JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casteo de campos
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Mutator para cifrar la contraseña automáticamente
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}

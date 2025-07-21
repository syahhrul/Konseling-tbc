<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'gender',
        'address',
        'email',
        'phone',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'birth_date' => 'date',
    ];

    /**
     * Menentukan kolom yang digunakan untuk autentikasi.
     * 
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'username';  // Menggunakan 'username' sebagai identifikasi
    }

    /**
     * Mutator untuk password
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}

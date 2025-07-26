<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'gender',
        'address',
        'email',
        'phone',
        'username',
        // 'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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
            'password' => 'hashed', // memastikan password di-hash
            'birth_date' => 'date', // memastikan birth_date di-cast sebagai tanggal
        ];
    }

    /**
     * Relasi: User memiliki banyak CheckHarian
     * Mengambil semua data check_harian terkait dengan user
     */
    public function checkHarians()
    {
        return $this->hasMany(CheckHarian::class, 'user_id'); // relasi ke model CheckHarian
            return $this->hasMany(CheckHarian::class);
    }
    
}

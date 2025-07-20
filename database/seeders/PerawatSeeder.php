<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PerawatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    User::create([
        'first_name' => 'Perawat',
        'last_name' => 'Satu',
        'birth_date' => '1990-01-01',
        'gender' => 'Perempuan',
        'address' => 'Klinik A',
        'phone' => '08123456789',
        'email' => 'perawat1@example.com',
        'username' => 'perawat1',
        'role' => 'perawat',
        'password' => Hash::make('passwordperawat'),
    ]);
}
}

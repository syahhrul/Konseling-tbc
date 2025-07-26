<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'nopal',
            'last_name' => 'acul',
            'birth_date' => '2003-12-13',
            'gender' => 'Laki-laki',
            'address' => 'koss panji',
            'phone' => '0895339946290',
            'email' => 'acul88@gmail.com',
            'username' => 'admin',
            // 'role' => 'pasien',
            'password' => Hash::make('admin'), // Ganti password sesuai kebutuhan
            'created_at' => now(),
            'updated_at' => now()
        ]);
        }
    }

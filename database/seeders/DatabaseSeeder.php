<?php

namespace Database\Seeders;

<<<<<<< HEAD
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
            'username' => 'aculaja',
            'role' => 'pasien',
            'password' => Hash::make('password123'), // Ganti password sesuai kebutuhan
            'created_at' => now(),
            'updated_at' => now(),
=======
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
>>>>>>> f830dc3 (Initial commit)
        ]);
    }
}

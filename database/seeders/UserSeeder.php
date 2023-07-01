<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Serena',
            'gender'=> 'female',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'dob' => '2002-04-10',
            'address' => '123 Admin Street, Cityville',
            'weight' => 52,
            'height' => 160,
            'is_admin' => 1
        ]);

        DB::table('users')->insert([
            'username' => 'Orion',
            'gender'=> 'male',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'dob' => '1999-03-03',
            'address' => '456 User Avenue, Townsville',
            'weight' => 75,
            'height' => 180
        ]);
    }
}

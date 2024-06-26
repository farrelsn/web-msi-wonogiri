<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'msikabwonogiri',
            'email' => 'ssr.msikabwonogiri@gmail.com',
            'password' => bcrypt("123456")
        ]);

        User::create([
            'username' => 'admin',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt("adminrahasia")
        ]);

        User::create([
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt("userrahasia")
        ]);
    }
}

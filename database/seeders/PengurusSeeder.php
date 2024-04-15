<?php

namespace Database\Seeders;

use App\Models\pengurus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pengurus::create([
            'nama' => 'admin',
            'jabatan' => 'Ketua',
            'foto' => ''
        ]);
    }
}

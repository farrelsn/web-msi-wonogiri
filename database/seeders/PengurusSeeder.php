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
            'nama' => 'Wahyu Uliarta, S.K.M.',
            'jabatan' => 'Staff Program',
            'foto' => '1718343949Picture1.jpg'
        ]);

        pengurus::create([
            'nama' => 'Hartini, S.E.',
            'jabatan' => 'Finance & Administration',
            'foto' => '1718344054Picture2.jpg'
        ]);

        pengurus::create([
            'nama' => 'Anggraini Santi S., S.K.M.',
            'jabatan' => 'Manager Kasus',
            'foto' => '1718344381Picture4.jpg'
        ]);

        pengurus::create([
            'nama' => 'Anis Suryani, S.K.M.',
            'jabatan' => 'Manager Kasus TB RO',
            'foto' => '1718344148Picture3.jpg'
        ]);

        pengurus::create([
            'nama' => 'Agus Cahyono',
            'jabatan' => 'Koordinator Kader',
            'foto' => '1718344194Picture9.jpg'
        ]);

        pengurus::create([
            'nama' => 'Anis Sagita Putri, S.Farm.',
            'jabatan' => 'Staff Data Entry',
            'foto' => '1718344426Picture5.jpg'
        ]);

        pengurus::create([
            'nama' => 'Dwi Saparwan',
            'jabatan' => 'Koordinator Kader',
            'foto' => '1718344460Picture6.jpg'
        ]);
    }
}

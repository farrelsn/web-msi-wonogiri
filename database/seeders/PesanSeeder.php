<?php

namespace Database\Seeders;

use App\Models\pesan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pesan::create([
            'nama' => 'admin',
            'email' => 'ssr.msikabwonogiri@gmail.com',
            'pesan' => 'Halo, ini adalah contoh pesan.'
        ]);

        pesan::create([
            'nama' => 'admin',
            'email' => 'contoh123@gmail.com',
            'pesan' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem mollitia sapiente natus quibusdam rerum ut quae porro repellendus, laudantium obcaecati fuga consequatur unde? Nulla quis earum aperiam facere, iusto doloribus!'
        ]);
    }
}

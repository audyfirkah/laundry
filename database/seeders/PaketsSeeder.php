<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PaketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        foreach (range(1, 3) as $index) {
            $paket = new \App\Models\Paket();
            $paket->id_paket = $index;
            $paket->nama = "Paket" . $index;
            $paket->layanan = "Kays" . $index;
            $paket->jenis_layanan = $faker->randomElement(['cuci', 'setrika', 'cuci setrika']);
            $paket->save();
        }
    }
}

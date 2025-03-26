<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TransaksisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $no = 1;

        foreach (range(1, 10) as $index) {
            Transaksi::create([
                'id_user' => $no,
                'id_cabang' => $no,
                'total' => null,
                'status' => $faker->randomElement(['proses', 'selesai']),
                'tanggal_order' => now(),
                'tanggal_selesai' => now(),
            ]);

            $no++;
        }
    }
}

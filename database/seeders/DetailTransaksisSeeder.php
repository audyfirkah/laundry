<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\DetailTransaksi;
use Faker\Factory as Faker;

class DetailTransaksisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        foreach (range(1, 10) as $index) {
            $detail_transaksi = new \App\Models\DetailTransaksi();
            $detail_transaksi->id_transaksi = $index;
            $detail_transaksi->id_paket = $faker->numberBetween(1, 3);
            $detail_transaksi->id_menu = null;
            $detail_transaksi->kuantitas = $faker->numberBetween(1, 3);
            $detail_transaksi->subtotal = $faker->randomFloat(2, 1, 100);
            $detail_transaksi->save();
    }
}

}

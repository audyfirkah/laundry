<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cabang;
use Faker\Factory as Faker;

class CabangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker = Faker::create('id_ID');

       foreach (range(1, 10) as $index) {
           $cabang = new \App\Models\Cabang();
           $cabang->id_user = $index;
           $cabang->nama_cabang = $faker->company;
           $cabang->alamat = $faker->address;
           $cabang->save();
       }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        foreach (range(1, 10) as $index) {
            $user = new \App\Models\User();
            $user->nama = $faker->name;
            $user->email = $faker->email;
            $user->no_hp = $faker->phoneNumber;
            $user->role = $faker->randomElement(['direktur', 'operator', 'customer', 'pelaksana']);
            $user->alamat = $faker->address;
            $user->password = bcrypt('12345678');
            $user->save();
        }
    }
}

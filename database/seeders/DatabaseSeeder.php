<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\CabangsSeeder;
use Database\Seeders\PaketsSeeder;
use Database\Seeders\MenusSeeder;
use Database\Seeders\TransaksisSeeder;
use Database\Seeders\DetailTransaksisSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            CabangsSeeder::class,
            PaketsSeeder::class,
            MenusSeeder::class,
            // TransaksisSeeder::class,
            // DetailTransaksisSeeder::class,
        ]);
    }
}

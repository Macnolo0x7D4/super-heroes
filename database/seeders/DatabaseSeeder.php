<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            GenderSeeder::class,
            UniverseSeeder::class,
            SuperheroeSeeder::class
        ]);
    }
}

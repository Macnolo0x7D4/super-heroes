<?php

namespace Database\Seeders;

use App\Models\Superheroe;
use Illuminate\Database\Seeder;

class SuperheroeSeeder extends Seeder
{
    public function run(): void
    {
        Superheroe::factory(10)->create();
    }
}

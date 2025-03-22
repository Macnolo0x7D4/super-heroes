<?php

namespace Database\Seeders;

use App\Models\Superhero;
use Illuminate\Database\Seeder;

class SuperheroSeeder extends Seeder
{
    public function run(): void
    {
        Superhero::factory(10)->create();
    }
}

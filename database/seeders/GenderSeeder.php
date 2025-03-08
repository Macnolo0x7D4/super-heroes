<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    public function run(): void
    {
        Gender::create(['type' => 'F']);
        Gender::create(['type' => 'M']);
        Gender::create(['type' => 'O']);
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Superhero;

class SuperheroFactory extends Factory
{
    protected $model = Superhero::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'real_name' => fake()->name(),
            'universe_id' => fake()->numberBetween(1, 2),
            'gender_id' => fake()->numberBetween(1, 3),
            'image_url' => fake()->imageUrl(640, 480, 'superheroes'),  // Random image URL
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Due;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Due::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'due_name' => fake()->text(255),
            'description' => fake()->sentence(15),
            'amount' => fake()->text(255),
        ];
    }
}

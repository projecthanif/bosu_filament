<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => fake()->text(255),
            'due_id' => fake()->text(255),
            'payment_amount' => fake()->text(255),
            'transaction_id' => fake()->text(255),
            'payment_date' => fake()->dateTime(),
        ];
    }
}

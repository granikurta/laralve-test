<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dealer_name' => fake()->name(),
            'contact_person' => Str::random(10),
            'credit_amount' => fake()->randomFloat(),
            'interest_rate' => fake()->randomFloat(), // password
            'credit_reason' => Str::random(10),
            'status' => Str::random(10),
            'bank_id' => \App\Models\Bank::factory(),
        ];
    }
}

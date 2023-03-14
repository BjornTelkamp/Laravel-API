<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => $this->faker->numberBetween(1, 10),
            'amount' => $this->faker->randomFloat(2, 100, 1000),
            'status' => $this->faker->randomElement(['paid', 'unpaid']),
            'billed_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'paid_date' => $this->faker->optional()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

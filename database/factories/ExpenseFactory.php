<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
        'amount' => $this->faker->randomNumber(4), // Generating a random number for amount (adjust as needed)
        'category' => $this->faker->word,
        'expense_date' => $this->faker->date(),
        'payment_method' => $this->faker->randomElement(['cash', 'credit_card', 'bank_transfer']), // Random payment method
        'notes' => $this->faker->sentence,
        'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

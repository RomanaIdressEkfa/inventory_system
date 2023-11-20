<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->unique()->phoneNumber,
            'address' => $this->faker->address,
            'contact_person' => $this->faker->phoneNumber,
            'account_balance' => $this->faker->numberBetween(0, 10000),
            'payment_terms' => $this->faker->randomElement(['Net 30', 'Net 60', 'COD']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

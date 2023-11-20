<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
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
            'loyalty_points' => $this->faker->numberBetween(0, 1000),
            'membership_status' => $this->faker->randomElement(['Basic', 'Premium', 'Gold']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

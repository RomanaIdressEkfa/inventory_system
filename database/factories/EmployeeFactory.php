<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
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
            'image' => null, // You might want to customize this based on your needs
            'position' => $this->faker->word,
            'department' => $this->faker->word,
            'nid_no' => $this->faker->randomNumber(),
            'date_of_birth' => $this->faker->date,
            'hire_date' => $this->faker->date,
            'salary' => $this->faker->numberBetween(30000, 90000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

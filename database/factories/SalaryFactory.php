<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salary>
 */
class SalaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' =>$this->faker->numberBetween([1,8]),
            'month' => $this->faker->monthName,
            'year' => $this->faker->numberBetween(2020, 2023), // Update the range based on your requirements
            'salary_amount' => $this->faker->randomFloat(2, 1000, 10000),
            'tax_deductions' => $this->faker->optional()->randomFloat(2, 100, 1000),
            'bonus' => $this->faker->optional()->randomFloat(2, 50, 500),
            'overtime_hours' => $this->faker->optional()->randomFloat(2, 1, 20),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

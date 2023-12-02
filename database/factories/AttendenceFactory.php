<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Attendence;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendence>
 */
class AttendenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' =>  $this->faker->randomElement([1, 8]),
            'attendance_date' => $this->faker->date(),
            'status' => $this->faker->randomElement([0, 1]), // Assuming 0 for absent, 1 for present
            'clock_in_time' => $this->faker->time(),
            'clock_out_time' => $this->faker->time(),
            'overtime_hours' => $this->faker->optional()->randomFloat(2, 0, 12), // Assuming a maximum of 12 overtime hours
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

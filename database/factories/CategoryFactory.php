<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->faker->word,
        'description' =>$this->faker->sentence,
        'image_url' => $this->faker->imageUrl(), // You can use 'imageUrl()' to generate fake image URLs
        'created_at' =>$this->faker->dateTimeBetween('-1 year', 'now'),
        'updated_at' =>$this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

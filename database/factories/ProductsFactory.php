<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
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
        'product_id' =>$this->faker->numberBetween([1,8]),
        'quantity' => $this->faker->numberBetween(1, 100),
        'price' => $this->faker->randomFloat(2, 10, 500),
        'description' => $this->faker->sentence,
        'image_url' => $this->faker->imageUrl(),
        'manufacturer' => $this->faker->word,
        'expiration_date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
        'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

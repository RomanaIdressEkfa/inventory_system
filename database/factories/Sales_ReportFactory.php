<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Order;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sales_Report>
 */
class Sales_ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 8),

            'order_id' =>$this->faker->numberBetween(1, 8) ,
            'quantity_sold' => $this->faker->numberBetween(1, 100),
            'total_amount' => $this->faker->randomFloat(2, 10, 500),
            'sale_date' => $this->faker->date(),
            'profit_margin' => $this->faker->optional()->randomFloat(2, 1, 50),
            'discount_amount' => $this->faker->optional()->randomFloat(2, 1, 20),
            'taxes' => $this->faker->optional()->randomFloat(2, 1, 30),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' =>$this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

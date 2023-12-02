<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Customer;
use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' =>$this->faker->numberBetween(1, 8),

            'order_date' => $this->faker->dateTimeThisYear(),
            'total_amount' => $this->faker->randomFloat(2, 50, 500),
            'status' => $this->faker->randomElement(['pending', 'processing', 'shipped', 'delivered']),
            'payment_method' => $this->faker->randomElement(['credit_card', 'cash_on_delivery', 'paypal']),
            'shipping_address' => $this->faker->address,
            'delivery_date' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\OrderItem;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prod_id' => $this->faker->randomNumber(),
            'quantity' => $this->faker->numberBetween(1, 5),
            'size' => $this->faker->randomElement(['S', 'M', 'L']),
            'price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}

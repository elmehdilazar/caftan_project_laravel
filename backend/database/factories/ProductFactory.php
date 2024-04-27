<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prod_id' => $this->faker->unique()->randomNumber(),
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
            'qte' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->boolean,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'user_id' => null,
            'image' => $this->faker->imageUrl(),
            'cat_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}

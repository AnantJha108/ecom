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
    public function definition()
    {
        return [
            'prod_name' => fake()->sentence(),
            'image' =>"https://picsum.photos/400?random=".fake()->numberBetween(1,9999),
            'category_id'=> fake()->numberBetween(1,6),
            'prod_description' => fake()->text,
            'prod_price'=>fake()->randomDigit,
            'prod_discount_price'=>fake()->randomDigit,

        ];
    }
}

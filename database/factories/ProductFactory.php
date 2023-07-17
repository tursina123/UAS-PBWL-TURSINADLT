<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $nama = ['Air Jordan', 'Adidas Spezial', 'Air Force', 'Air Max', 'Air Dunk'];
        return [
            'sku' => Str::random(10),
            'name' => fake()->randomElement($nama),
            'price' => fake()->randomNumber(6),
            'stock' => fake()->randomNumber(2), 
        ];
    }
}

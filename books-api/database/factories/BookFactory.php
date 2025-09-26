<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_name' => fake()->words(6, true),
            'book_author_name' => fake()->name() . ' ' . fake()->lastName(),
            'book_price' => fake()->randomFloat(2, 100, 10000),
            'book_stock' => fake()->numberBetween(1, 100),
            'book_status' => fake()->boolean(),
        ];
    }
}

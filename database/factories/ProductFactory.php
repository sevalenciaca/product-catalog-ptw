<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(8), 
            'price' => $this->faker->numberBetween(50000, 200000),
            'description' => $this->faker->text(150),
            'stock' => $this->faker->numberBetween(0, 100),
            'status' => $this->faker->boolean(),
            'category_id' => Category::all()->random()->id
        ];
    }
}

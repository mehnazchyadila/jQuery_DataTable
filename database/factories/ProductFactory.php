<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $categories = category::pluck('id')->toArray();
        return [
            'name' => $this->faker->name,
            'details' => $this->faker->text($maxNbChar = 200),
            'price' => $this->faker->numberBetween($main= 500, $max = 2000),
            'status' => True,
            'category_id'=> $this->faker->randomElement($categories)
        ];
    }
}

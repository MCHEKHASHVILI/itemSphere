<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ProductsStore;

class ProductsStoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductsStore::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->randomNumber(),
            'store_id' => $this->faker->randomNumber(),
            'quantity' => $this->faker->randomNumber(),
            'price' => $this->faker->randomFloat(0, 0, 9999999999.),
            'status' => $this->faker->word,
        ];
    }
}

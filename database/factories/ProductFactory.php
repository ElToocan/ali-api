<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'reference' => $this->faker->word(),
            'description' => $this->faker->text(),
            'purchasePrice' => $this->faker->randomFloat(),
            'sellingPrice' => $this->faker->randomFloat(),
            'vat_id' => \App\Models\Vat::inRandomOrder()->first()->id ,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'reference' => $this->faker->word(),
            'creationDate' => Carbon::now(),
            'amountET' => $this->faker->randomFloat(),
            'amountVAT' => $this->faker->randomFloat(),

            'customer_id' => Customer::inRandomOrder()->first()->id,

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

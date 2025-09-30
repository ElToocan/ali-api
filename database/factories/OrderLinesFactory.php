<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderLines;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OrderLinesFactory extends Factory
{
    protected $model = OrderLines::class;

    public function definition(): array
    {
        $order = \App\Models\Order::inRandomOrder()->first();
        $product = Product::inRandomOrder()->first();
        $amountVat = ( $product->sellingPrice * $product->vat->rate ) / 100 ;

        return [
            'unitPrice' => $product->sellingPrice,
            'amountVat' => $amountVat ,
            'quantity' => $this->faker->numberBetween(1, 20),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'order_id' => $order->id,
            'product_id' => $product->id,
        ];
    }
}

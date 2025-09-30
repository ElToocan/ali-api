<?php

namespace Database\Factories;

use App\Models\Vat;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class VatFactory extends Factory
{
    protected $model = Vat::class;

    public function definition(): array
    {
        return [
            'categorie' => $this->faker->word(),
            'rate' => $this->faker->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

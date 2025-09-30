<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Vat::factory()->create([
            'categorie' => 'normale',
            'rate' => 20
        ]);

        \App\Models\Vat::factory()->create([
            'categorie' => 'intermediaire',
            'rate' => 10
        ]);

        \App\Models\Vat::factory()->create([
            'categorie' => 'reduit',
            'rate' => 5.5
        ]);

        \App\Models\Vat::factory()->create([
            'categorie' => 'particulier',
            'rate' => 2.1
        ]);

    }
}

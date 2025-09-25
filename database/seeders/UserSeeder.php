<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        for( $i = 1; $i < 10; $i++ ) {
            User::factory()->create([
                'name' => 'alizon-salesman'.$i,
                'email' => 'saler0'.$i.'@alizon.fr',
            ]);
        }

        for( $i = 1; $i < 10; $i++ ) {
            User::factory()->create([
                'name' => 'alizon-purchaser'.$i,
                'email' => 'purchaser0'.$i.'@alizon.fr',
            ]);
        }

        for( $i = 1; $i < 10; $i++ ) {
            User::factory()->create([
                'name' => 'alizon-order-picker'.$i,
                'email' => 'orderPicker0'.$i.'@alizon.fr',
            ]);
        }

//        User::factory(10)->create();
    }
}

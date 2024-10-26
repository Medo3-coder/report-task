<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Seed data for products
        $products = [];
        for ($i = 0; $i < 10; $i++) {
            $products[] = [
                'name' => $faker->word(),
                'stock' => $faker->numberBetween(10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert products into the database
        DB::table('products')->insert($products);

        // Seed data for transactions
        $transactions = [];
        foreach (range(1, 10) as $productId) {
            for ($j = 0; $j < 5; $j++) {
                $transactions[] = [
                    'product_id' => $productId,
                    'amount' => $faker->randomFloat(2, 1, 100),
                    'quantity' => $faker->numberBetween(1, 50),
                    'type' => $faker->randomElement(['open_stock', 'purchase', 'sell', 'sell_return', 'purchase_return', 'adjustment']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        // Insert transactions into the database
        DB::table('transactions')->insert($transactions);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product_details')->insert([
            ['product_id' => 1, 'size_id' => 1, 'quantity' => 30],
            ['product_id' => 1, 'size_id' => 2, 'quantity' => 30],
            ['product_id' => 1, 'size_id' => 3, 'quantity' => 30],
            ['product_id' => 1, 'size_id' => 4, 'quantity' => 30],

            ['product_id' => 2, 'size_id' => 1, 'quantity' => 30],
            ['product_id' => 2, 'size_id' => 2, 'quantity' => 30],
            ['product_id' => 2, 'size_id' => 3, 'quantity' => 30],

            ['product_id' => 3, 'size_id' => 1, 'quantity' => 30],
            ['product_id' => 3, 'size_id' => 2, 'quantity' => 30],
            ['product_id' => 3, 'size_id' => 3, 'quantity' => 30],

            ['product_id' => 4, 'size_id' => 5, 'quantity' => 30],
            ['product_id' => 4, 'size_id' => 6, 'quantity' => 30],
            ['product_id' => 4, 'size_id' => 7, 'quantity' => 30],
            ['product_id' => 4, 'size_id' => 8, 'quantity' => 30],
            ['product_id' => 4, 'size_id' => 9, 'quantity' => 30],

            ['product_id' => 5, 'size_id' => 5, 'quantity' => 0],
            ['product_id' => 5, 'size_id' => 6, 'quantity' => 0],
            ['product_id' => 5, 'size_id' => 7, 'quantity' => 0],
            ['product_id' => 5, 'size_id' => 8, 'quantity' => 0],
            ['product_id' => 5, 'size_id' => 9, 'quantity' => 0]
        ]);
    }
}

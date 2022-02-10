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
        DB::table('product_details')->insert([
            ['product_id' => 1, 'size_id' => 1],
            ['product_id' => 1, 'size_id' => 2],
            ['product_id' => 1, 'size_id' => 3],
            ['product_id' => 1, 'size_id' => 4],

            ['product_id' => 2, 'size_id' => 1],
            ['product_id' => 2, 'size_id' => 2],
            ['product_id' => 2, 'size_id' => 3],

            ['product_id' => 3, 'size_id' => 1],
            ['product_id' => 3, 'size_id' => 2],
            ['product_id' => 3, 'size_id' => 3],

            ['product_id' => 4, 'size_id' => 5],
            ['product_id' => 4, 'size_id' => 6],
            ['product_id' => 4, 'size_id' => 7],
            ['product_id' => 4, 'size_id' => 8],
            ['product_id' => 4, 'size_id' => 9],

            ['product_id' => 5, 'size_id' => 5],
            ['product_id' => 5, 'size_id' => 6],
            ['product_id' => 5, 'size_id' => 7],
            ['product_id' => 5, 'size_id' => 8],
            ['product_id' => 5, 'size_id' => 9]
        ]);
    }
}

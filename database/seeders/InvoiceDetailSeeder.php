<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvoiceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('invoice_details')->insert([
            [
                'invoice_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'size' => 'S',
                'total' => 350000
            ],

            [
                'invoice_id' => 2,
                'product_id' => 3,
                'quantity' => 3,
                'size' => 'M',
                'total' => 1140000
            ],

            [
                'invoice_id' => 3,
                'product_id' => 3,
                'quantity' => 1,
                'size' => 'L',
                'total' => 380000
            ],
            [
                'invoice_id' => 3,
                'product_id' => 4,
                'quantity' => 2,
                'size' => '36',
                'total' => 1000000
            ],
            [
                'invoice_id' => 3,
                'product_id' => 1,
                'quantity' => 2,
                'size' => 'S',
                'total' => 700000
            ],
            [
                'invoice_id' => 3,
                'product_id' => 2,
                'quantity' => 1,
                'size' => 'S',
                'total' => 989000
            ],

            [
                'invoice_id' => 4,
                'product_id' => 2,
                'quantity' => 1,
                'size' => 'S',
                'total' => 989000
            ],
        ]);
    }
}

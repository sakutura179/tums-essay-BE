<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            [
                'name' => 'top',
                'slug' => 'top'
            ],
            [
                'name' => 'denim',
                'slug' => 'denim'
            ],
            [
                'name' => 'bottom',
                'slug' => 'bottom'
            ],
            [
                'name' => 'outterwear',
                'slug' => 'outterwear'
            ],
            [
                'name' => 'accessories',
                'slug' => 'accessories'
            ]
        ]);
    }
}

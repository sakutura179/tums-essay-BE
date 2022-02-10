<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'path' => 'upload/short-nhung-den-1.jpg',
                'product_id' => 1,
            ],
            [
                'path' => 'upload/short-nhung-den-2.jpg',
                'product_id' => 1,
            ],
            [
                'path' => 'upload/short-nhung-den-3.jpg',
                'product_id' => 1,
            ],
            [
                'path' => 'upload/harley-14.jpg',
                'product_id' => 2,
            ],
            [
                'path' => 'upload/harley-15.jpg',
                'product_id' => 2,
            ],
            [
                'path' => 'upload/harley-16.jpg',
                'product_id' => 2,
            ],
            [
                'path' => 'upload/harley-17.jpg',
                'product_id' => 2,
            ],
            [
                'path' => 'upload/ins-tee-4-1.jpg',
                'product_id' => 3,
            ],
            [
                'path' => 'upload/ins-tee-5.jpg',
                'product_id' => 3,
            ],
            [
                'path' => 'upload/a%CC%81o-bong-2.jpg',
                'product_id' => 3,
            ],
            [
                'path' => 'upload/jean-3-nu%CC%81t-3.jpg',
                'product_id' => 4,
            ],
            [
                'path' => 'upload/jean-3-nu%CC%81t-8.jpg',
                'product_id' => 4,
            ],
            [
                'path' => 'upload/jean-3-nu%CC%81t-6.jpg',
                'product_id' => 4,
            ],
            [
                'path' => 'upload/KI%CC%81NH-3-xe%CC%81o.jpg',
                'product_id' => 5,
            ],
            [
                'path' => 'upload/mason-6.jpg',
                'product_id' => 5,
            ],
            [
                'path' => 'upload/KI%CC%81NH-3-chi%CC%81nh-die%CC%A3%CC%82n.jpg',
                'product_id' => 5,
            ],
            [
                'path' => 'upload/KI%CC%81NH-3-ngang.jpg',
                'product_id' => 5,
            ],
        ]);
    }
}

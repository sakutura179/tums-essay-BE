<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedback')->insert([
            [
                "customerName" => "QK",
                "phone" => "0980980987",
                "email" => "khanh@gmail.com",
                "message" => "Sản phẩm tuyệt vờiiiii"
            ],
            [
                "customerName" => "Như Ngọc",
                "email" => "ngocb@gmail.com",
                "phone" => "0909090909",
                "message" => "tuyệt vờiiii",
            ],
            [
                "customerName" => "Như Ngọc",
                "email" => "ngocb123456@gmail.com",
                "phone" => "0909090909",
                "message" => "Message 2",
            ]
        ]);
    }
}

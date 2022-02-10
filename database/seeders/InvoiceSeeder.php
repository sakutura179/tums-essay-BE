<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('invoices')->insert([
            [
                "customerName" => "Như Ngọc",
                "phone" => "0989898989",
                "email" => "ngoc@gmail.com",
                "city" => "Cần Thơ",
                "district" => "Bình Thủy",
                "ward" => "xxxx",
                "address" => "xxx/xxx/xxx Đường xxx",
                "note" => "",
                "total_invoice" => 350000,
            ],
            [
                "customerName" => "123",
                "phone" => "123",
                "email" => "123",
                "city" => "123",
                "district" => "13",
                "ward" => "123",
                "address" => "13",
                "note" => "",
                "total_invoice" => 1140000,
            ],
            [
                "customerName" => "Quốc Khánh",
                "phone" => "0909090909",
                "email" => "khanh@gmail.com",
                "city" => "ST",
                "district" => "ST",
                "ward" => "6",
                "address" => "xx/x đường xxx",
                "note" => "Giao hàng buổi sáng",
                "total_invoice" => 3069000,
            ],
            [
                "customerName" => "QK",
                "phone" => "0980980987",
                "email" => "khanhb18@gmail.com",
                "city" => "ST",
                "district" => "ST",
                "ward" => "11",
                "address" => "xx/xx/xx đường xxx",
                "note" => "",
                "total_invoice" => 989000,
            ],
        ]);
    }
}

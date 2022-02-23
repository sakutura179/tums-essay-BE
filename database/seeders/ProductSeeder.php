<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            [
                'name' => 'CODUROY SHORT - BLACK',
                'slug' => 'coduroy-short-black',
                'price' => 350000,
                'desc' => '_ THÀNH PHẦN VẢI: 90% COTTON, 10% SPANDEX',
                'cate_id' => 3,
            ],
            [
                'name' => 'T.M.G JACKET',
                'slug' => 'tmg-jacket',
                'price' => 989000,
                'desc' => '_ PHIÊN BẢN GIỚI HIỆN ĐẶC BIỆT, KÈM THEO ÁO LÀ HỘP, STICKER',
                'cate_id' => 4,
            ],
            [
                'name' => 'SEEM ON INS – TSHIRT',
                'slug' => 'seem-on-ins-tshirt',
                'price' => 380000,
                'desc' => '_THÀNH PHẦN VẢI: 100% COTTON',
                'cate_id' => 1,
            ],
            [
                'name' => 'RELAX BUTTON DENIM / SLIM FIT – BLACK',
                'slug' => 'relax-button-denim-slim-fit-black',
                'price' => 500000,
                'desc' => '_THÀNH PHẦN VẢI : 95% COTTON, 5% ELASTANE',
                'cate_id' => 2,
            ],
            [
                'name' => 'MAGNUS GLASS – BLACK',
                'slug' => 'magnus-glass-black',
                'price' => 250000,
                'desc' => '_ BẠN CẦN MỘT CHIẾC KÍNH CẬN MANG VẺ PHÁ CÁCH, PHÙ HỢP CHO CÔNG VIỆC, CHO HỌC, CHO QUẨY VÀ CÓ ĐỘ BỀN CAO THÌ MAGNUS SINH RA LÀ DÀNH CHO BẠN. HÃY YÊN TÂM LÀ KÍNH NÀY PHÙ HỢP VỚI MỌI KHUÔN MẶT. WEAR AND PLAY THÔI!',
                'cate_id' => 5,
            ],
        ]);
    }
}

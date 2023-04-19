<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('danh_muc_san_phams')->delete();

        DB::table('danh_muc_san_phams')->truncate();

        DB::table('danh_muc_san_phams')->insert([
            ['ten_danh_muc' => 'Điện thoại', 'slug_danh_muc' => 'dien-thoai', 'hinh_anh' => '', 'id_danh_muc_cha' => 0, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'Laptop', 'slug_danh_muc' => 'laptop', 'hinh_anh' => '', 'id_danh_muc_cha' => 0, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'PC', 'slug_danh_muc' => 'pc', 'hinh_anh' => '', 'id_danh_muc_cha' => 0, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'Đồng hồ', 'slug_danh_muc' => 'dong-ho', 'hinh_anh' => '', 'id_danh_muc_cha' => 0, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'Tai nghe', 'slug_danh_muc' => 'tai-nghe', 'hinh_anh' => '', 'id_danh_muc_cha' => 0, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'Điện thoại Apple', 'slug_danh_muc' => 'dien-thoai-apple', 'hinh_anh' => '', 'id_danh_muc_cha' => 1, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'Điện thoại SamSung', 'slug_danh_muc' => 'dien-thoai-samsung', 'hinh_anh' => '', 'id_danh_muc_cha' => 1, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'Laptop Asus', 'slug_danh_muc' => 'laptop-asus', 'hinh_anh' => '', 'id_danh_muc_cha' => 2, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'Laptop Dell', 'slug_danh_muc' => 'laptop-dell', 'hinh_anh' => '', 'id_danh_muc_cha' => 2, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'PC HP', 'slug_danh_muc' => 'pc-hp', 'hinh_anh' => '', 'id_danh_muc_cha' => 3, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'PC Lenovo', 'slug_danh_muc' => 'pc-lenovo', 'hinh_anh' => '', 'id_danh_muc_cha' => 3, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'Đồng hồ Xiaomi', 'slug_danh_muc' => 'dong-ho-xiaomi', 'hinh_anh' => '', 'id_danh_muc_cha' => 4, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'Đồng hồ Apple', 'slug_danh_muc' => 'dong-ho-apple', 'hinh_anh' => '', 'id_danh_muc_cha' => 4, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'Tai nghe Sony', 'slug_danh_muc' => 'tai-nghe-sony', 'hinh_anh' => '', 'id_danh_muc_cha' => 5, 'is_delete' => 0, 'is_open' => 1 ],
            ['ten_danh_muc' => 'Tai nghe SamSung', 'slug_danh_muc' => 'tai-nghe-samsung', 'hinh_anh' => '', 'id_danh_muc_cha' => 5, 'is_delete' => 0, 'is_open' => 1 ],
        ]);
    }
}

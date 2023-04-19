<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Admins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adminsndgs')->delete();

        DB::table('adminsndgs')->truncate();

        DB::table('adminsndgs')->insert([
            [
            'ho_va_ten' => 'Hồ Trung',
            'created_at' => now(),
            'updated_at' => now(),
            'sdt' => '0763514492',
            'password' => bcrypt('123456'),
            'ghi_chu'=>'Iam the best, the one!',
            'is_allow'=>1,
            'is_own'=>1
            ],
        ]);
    }
}

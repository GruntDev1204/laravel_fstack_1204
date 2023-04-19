<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTrung extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_chats')->delete();

        DB::table('user_chats')->truncate();

        DB::table('user_chats')->insert([
            ['full_name' => 'Hồ Trung', 'sdt' => '0763514492', 'password' =>  bcrypt('hotrung1204')],
        ]);
    }
}

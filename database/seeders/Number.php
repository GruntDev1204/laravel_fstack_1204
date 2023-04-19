<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Number extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('updated_numbers')->delete();

        DB::table('updated_numbers')->truncate();

        DB::table('updated_numbers')->insert([
            ['followers' => '0', 'nft' => '0','twitter' => '0','holders' => '0'],
        ]);
    }
}

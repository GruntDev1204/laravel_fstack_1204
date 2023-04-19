<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bang2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bang2s')->delete();

        DB::table('bang2s')->truncate();

        DB::table('bang2s')->insert([
            ['tenngpt' => 'HOTRUNG' , 'mst' => '123456' , 'id' => 1]
        ]);
    }
}

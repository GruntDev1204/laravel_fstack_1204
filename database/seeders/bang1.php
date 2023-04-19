<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bang1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bang1s')->delete();

        DB::table('bang1s')->truncate();

        DB::table('bang1s')->insert([
            ['id_ngpt' => 1, 'id' => 1, 'tennv' => 'LTBC' ,'mstnv'=> '123123' ]
        ]);
    }
}

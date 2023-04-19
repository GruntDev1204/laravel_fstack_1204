<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Token extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('charts')->delete();

        DB::table('charts')->truncate();

        DB::table('charts')->insert([
            ['writer' => 'SNDG members', 'content' => 'Will be update then','img' => '/'],
        ]);
    }
}

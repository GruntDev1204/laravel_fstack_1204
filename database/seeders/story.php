<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class story extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('the_stories')->delete();

        DB::table('the_stories')->truncate();

        DB::table('the_stories')->insert([
            ['title' => 'SNDG Stories', 'content' => 'Welcome!',],
        ]);
    }
}

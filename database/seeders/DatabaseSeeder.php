<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        // Schema::disableForeignKeyConstraints();
        // $this->call(DanhMucSeeder::class);
        // $this->call(SanPhamSeeder::class);

    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminSndg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminSNDGs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ho_va_ten');
            $table->string('sdt');
            $table->string('password');
            $table->longText('ghi_chu');
            $table->integer('is_allow')->default(0);
            $table->integer('is_own')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('ho_lot')->nullable();
            $table->string('ten')->nullable();
            $table->string('ho_va_ten');
            $table->string('so_dien_thoai');
            $table->string('email');
            $table->string('password');
            $table->string('dia_chi');
            $table->string('thanh_pho');
            $table->integer('is_block')->default(0);
            $table->integer('is_email')->default(0);
            $table->string('hash');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}

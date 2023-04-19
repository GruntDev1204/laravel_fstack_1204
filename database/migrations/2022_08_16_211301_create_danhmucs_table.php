<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhmucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhmucs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_danh_muc');
            $table->string('slug_danh_muc');
            $table->integer('id_danh_muc_cha')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('danhmucs');
    }
}

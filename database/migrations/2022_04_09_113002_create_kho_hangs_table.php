<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhoHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kho_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('id_san_pham');
            $table->string('ten_san_pham');
            $table->integer('so_luong');
            $table->integer('don_gia')->nullable();
            $table->integer('thanh_tien')->nullable();
            $table->integer('type')->default(0);
            $table->string('hash')->nullable();
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
        Schema::dropIfExists('kho_hangs');
    }
}

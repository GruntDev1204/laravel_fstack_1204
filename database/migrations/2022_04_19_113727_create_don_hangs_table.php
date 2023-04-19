<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_don_hang');
            $table->double('tong_tien', 18, 0);
            $table->double('tien_giam_gia', 18, 0);
            $table->double('thuc_tra', 18, 0);
            $table->integer('agent_id');
            $table->integer('user_id');
            $table->integer('loai_thanh_toan');
            $table->integer('is_dat_hang')->default(1);
            $table->integer('is_giao_hang')->default(0);
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
        Schema::dropIfExists('don_hangs');
    }
}

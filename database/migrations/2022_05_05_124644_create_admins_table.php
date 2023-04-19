<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ho_lot')->nullable();
            $table->string('ten')->nullable();
            $table->string('ho_va_ten');
            $table->string('sdt');
            $table->string('password');
            $table->longText('ghi_chu');
            $table->integer('is_block')->default(0);
            $table->integer('is_allow')->default(0);
            $table->integer('is_own')->default(0);
            $table->string('hash');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}

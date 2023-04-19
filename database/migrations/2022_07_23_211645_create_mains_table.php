<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ho_lot')->nullable();
            $table->string('ten')->nullable();
            $table->string('ho_va_ten');
            $table->string('sdt');
            $table->string('password');
            $table->string('email');
            $table->string('Ucode');
            $table->integer('is_allow')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mains');
    }
}

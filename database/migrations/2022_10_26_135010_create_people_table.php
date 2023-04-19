<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('ho_va_ten');
            $table->string('birth');
            $table->string('detail')->nullable();
            $table->string('education')->nullable();
            $table->string('skill')->nullable();
            $table->text('note')->nullable();
            $table->text('location')->nullable();
            $table->string('avatar')->nullable();
            $table->string('sdt')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('hash');
            $table->integer('is_info')->default(0);
            $table->integer('follower')->default(0);
            $table->integer('following')->default(0);
            $table->integer('is_allow')->default(0);
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
        Schema::dropIfExists('people');
    }
}

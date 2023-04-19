<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timelines', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('month')->default(0);
            $table->string('week');
            $table->longText('line_one');
            $table->integer('is_line_one')->default(0);
            $table->longText('line_two');
            $table->integer('is_line_two')->default(0);
            $table->longText('line_three');
            $table->integer('is_line_three')->default(0);
            $table->longText('line_four');
            $table->integer('is_line_four')->default(0);
            $table->longText('line_five');
            $table->integer('is_line_five')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timelines');
    }
}

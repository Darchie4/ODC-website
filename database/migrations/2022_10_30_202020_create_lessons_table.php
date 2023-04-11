<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("lesson_name");
            $table->string("age");
            $table->string("day");
            $table->string("lesson_start_time");
            $table->string("lesson_end_time");
            $table->string("km_id") -> unique();
            $table->foreignId("teacher_id") ->constrained();
            $table->foreignId("location_id") -> constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};

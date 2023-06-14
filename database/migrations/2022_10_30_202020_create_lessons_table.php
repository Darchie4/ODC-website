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
            $table->string("name");
            $table->string("age");
            $table->string("day");
            $table->string("lesson_start_time");
            $table->string("lesson_end_time");
            $table->string("short_description");
            $table->text("long_description");
            $table->string("km_id") -> unique();
            $table->foreignId("location_id") -> constrained();
            $table->foreignId("dance_style_id") -> constrained();
            $table->foreignId("skill_level_id") -> constrained();
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

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
            $table->string("name");
            $table->string("age_from");
            $table->string("age_to");
            $table->string("day");
            $table->date("season_start");
            $table->date("season_end");
            $table->time("lesson_start_time");
            $table->time("lesson_end_time");
            $table->string("short_description");
            $table->text("long_description");
            //$table->boolean("is_available")->default(true);
            //$table->boolean("is_visible")->default(true);
            $table->string("km_id") -> unique();
            $table->foreignId("location_id") -> constrained();
            $table->foreignId("dance_style_id") -> constrained();
            $table->foreignId("skill_level_id") -> constrained();
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
        Schema::dropIfExists('lessons');
    }
};

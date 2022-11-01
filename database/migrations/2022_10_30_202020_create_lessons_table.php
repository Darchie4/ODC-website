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
            $table->string("teacher_id");
            $table->foreign("teacher_id") -> references('teacherID') -> on('dance_teachers');
            $table->string("location_id");
            $table->foreign("location_id") -> references('room_name') -> on('locations');
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

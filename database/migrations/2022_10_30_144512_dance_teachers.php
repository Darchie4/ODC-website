<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dance_teachers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('teacherID');
            $table->string('name');
            $table->string('imgName');
            $table->string('shortDescription');
            $table->text('longDescription');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dance_teachers');
    }
};

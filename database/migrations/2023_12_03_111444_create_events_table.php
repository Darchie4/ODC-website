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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->dateTime("start_time");
            $table->dateTime("end_time");

            $table->foreignId("location_id")->nullable()->constrained();
            $table->string("external_address")->nullable();

            $table->string("short_description");
            $table->text("long_description");

            $table->boolean("visible");
            $table->boolean("internal_only");
            $table->boolean("signup_needed");
            $table->string("signup_link")->nullable();

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
        Schema::dropIfExists('events');
    }
};

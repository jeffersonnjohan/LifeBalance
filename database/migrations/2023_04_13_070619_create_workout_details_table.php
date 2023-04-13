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
        Schema::create('workout_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('workout_day_id');
            $table->unsignedBigInteger('workout_activity_id');
            $table->integer('repetition');
            $table->integer('calories');
            $table->integer('duration'); // in seconds
            $table->integer('order');

            $table->foreign('workout_day_id')->references('id')->on('workout_days')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('workout_activity_id')->references('id')->on('workout_activities')->constrained()->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workout_details');
    }
};

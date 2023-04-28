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
        Schema::create('enrollment_workouts_finishes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enrollment_workout_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('workout_day_id')->defualt(0);
            // $table->integer('is_finished')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollment_workouts_finishes');
    }
};

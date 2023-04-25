<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_workouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('workout_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            // $table->date('start_date')->default(Carbon::now());
            // $table->date('end_date')->nullable();
            $table->integer('finished_day')->default(0);
            $table->boolean('is_done')->default(false); // true, if user finished the plan
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
        Schema::dropIfExists('enrollment_workouts');
    }
};

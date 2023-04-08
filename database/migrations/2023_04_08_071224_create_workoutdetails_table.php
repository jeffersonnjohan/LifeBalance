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
        Schema::create('workoutdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('workoutday_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('workoutactivity_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('repetition');
            $table->integer('calories');
            $table->integer('duration'); // in seconds
            $table->integer('order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workoutdetails');
    }
};

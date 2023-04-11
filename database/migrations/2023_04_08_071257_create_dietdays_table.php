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
        Schema::create('dietdays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('diet_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('calories');
            $table->integer('order');
            $table->text('description'); // in seconds
            $table->integer('is_done');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dietdays');
    }
};

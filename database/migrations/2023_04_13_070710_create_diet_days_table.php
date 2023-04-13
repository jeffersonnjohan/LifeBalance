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
        Schema::create('diet_days', function (Blueprint $table) {
            $table->id();
            $table->foreignId('diet_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('calories');
            $table->integer('order');
            $table->text('description'); // in seconds
            $table->boolean('is_done')->default(false);
            $table->timestamp('created_at')->default(Carbon::now()->toDateTimeString());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diet_days');
    }
};

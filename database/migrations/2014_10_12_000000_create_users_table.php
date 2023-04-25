<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('gender', ['male', 'female']);
            $table->string('username')->unique();
            $table->string('password');
            $table->date('dob');
            $table->text('address')->nullable();
            $table->string('image')->default('images/profile');
            $table->float('weight');
            $table->integer('height');
            $table->integer('points')->default(0);
            $table->integer('streak_count')->default(0);
            $table->date('last_login')->default(Carbon::now());
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

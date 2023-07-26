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
            $table->string('password')->nullable();
            $table->date('dob');
            $table->text('address')->nullable();
            $table->string('image')->default('profile-images-default/profile.png');
            $table->float('weight');
            $table->integer('height');
            $table->integer('points')->default(0);
            $table->integer('streak_count')->default(1);
            $table->date('last_login')->default(Carbon::now());
            $table->boolean('is_admin')->default(0);
            $table->rememberToken();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('provider_token')->nullable();
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
        Schema::dropIfExists('users');
    }
};

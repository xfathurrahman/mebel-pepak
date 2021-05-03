<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role')->default('user');
            $table->string('name');
            $table->string('username')->nullable()->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_number')->nullable()->unique();
            $table->string('web_address')->nullable();
            $table->string('birth_date')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->text('header_profile_photo_path')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->timestamps();
        });
//
        //TODO
//        Schema::create('addresses', function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->foreignId('user_id');
//            $table->string('state')->nullable();
//            $table->string('city')->nullable();
//            $table->text('address');
//            $table->string('phone')->nullable();
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//            $table->timestamps();
//        });

    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}

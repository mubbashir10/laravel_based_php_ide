<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbSkeleton extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('userID');
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('password', 60);
            $table->integer('role')->default(0);
        });

        Schema::create('logs', function (Blueprint $table) {
            $table->increments('logID');
            $table->string('username');
            $table->longText('data');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('logs');
    }
}

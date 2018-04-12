<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identity');
            $table->string('kididentity1');
            $table->string('classkid1');
            $table->integer('kidage1');
            $table->string('kididentity2');
            $table->string('classkid2');
            $table->integer('kidage2');
            $table->string('kididentity3');
            $table->string('classkid3');
            $table->integer('kidage3');
            $table->string('status');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
}

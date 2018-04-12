<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Responses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content',255);
            $table->Timestamp('date_publication');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')-> references('id')->on('users');
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')-> references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

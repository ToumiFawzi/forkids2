<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content',255);
            $table->Timestamp('date_creation');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')-> references('id')->on('users');
            $table->integer('community_id')->unsigned();
            $table->foreign('community_id')-> references('id')->on('community');
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

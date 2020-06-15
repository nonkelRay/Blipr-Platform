<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlipsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blips', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('video');
            $table->string('description');
            $table->string('feeling')->nullable();
            $table->integer('heartbeat')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->boolean('active');
            $table->timestamps();
        });

        Schema::table('blips', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('blips');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('title');
            $table->string('artist');
            $table->date('date');
            $table->string('image');
            $table->string('link_socials')->nullable();
            $table->string('link_tickets')->nullable();
            $table->integer('duration')->nullable();
            $table->string('video_link')->nullable();
            $table->integer('venue_id')->unsigned();
            $table->string('venue_name');
            $table->boolean('active');
            $table->timestamps();
        });

        Schema::table('events', function (Blueprint $table) {
            $table->foreign('venue_id')->references('id')->on('venues');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}

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
            $table->id();
            $table->string('video');
            $table->string('description');
            $table->string('feeling');
            $table->integer('heartbeat')->nullable();
            $table->integer('user_id');
            $table->boolean('active');
            $table->timestamps();
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

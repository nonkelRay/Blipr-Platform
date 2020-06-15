<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('id', true);
=======
            $table->id();
>>>>>>> parent of 7fcf52d... Merge pull request #5 from nonkelRay/revert-4-feature/venue-can-login
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('venues');
    }
}

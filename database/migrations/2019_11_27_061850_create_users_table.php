<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('role');
            $table->string('password', 255);
            $table->string('email');
<<<<<<< HEAD
            $table->string('phone');
            $table->string('course')->nullable();
=======
            // $table->string('phone');
            $table->string('course');
>>>>>>> 8581eeff0bda031e871d0c6da1b2147558962fa3
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

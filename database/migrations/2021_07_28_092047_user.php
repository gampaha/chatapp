<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    
    public function up()
    {
        Schema::create('user', function (Blueprint $table) 
        {
            $table->increments('id', true);
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('user');

    }
    
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Messages extends Migration
{
  public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id', true);
            $table->Biginteger('person_id')->unsigned();
            $table->Biginteger('conversation_id')->unsigned();
            $table->text('body');
            $table->timestamps();
        });   
}

    public function down()
    {
        Schema::dropIfExists('messages');
}
}

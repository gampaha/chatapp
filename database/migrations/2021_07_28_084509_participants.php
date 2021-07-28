<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Participants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            
            $table->increments('id', true);
            $table->unsignedBigInteger('person_id');
            $table->integer('conversation_id')->unsigned();
            //$table->timestamp('created_at')->nullable();
            $table->timestamps();
            
        });  
    }

    public function down()
    {
        Schema::dropIfExists('participants');   
           

    }
}

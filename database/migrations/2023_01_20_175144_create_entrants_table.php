<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrants', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
                         
             //clé étrangère 
           
             $table->unsignedInteger('idEvents')->unsigned()->nullable();
             $table->foreign('idEvents')
             ->references('id')
             ->on('events')
             ->onDelete('cascade');

             $table->string('lastName');
             $table->string('firstName');
             $table->string('phone');
             $table->string('email');
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
        Schema::dropIfExists('entrants');
    }
}
